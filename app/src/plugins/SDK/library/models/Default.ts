// Axios
import axios from 'axios'
// Interfaces
import { Config } from "../interfaces/Config";
import { Request } from "../interfaces/Request";
import { Response } from "../interfaces/Response";
import { Responses } from '../enums/ResponseEnum';
import Endpoints from '../../api/consts/Endpoints';
import { EmptyResponse } from '../consts/EmptyResponse';
import { RequestCRUDMethod, RequestMethod } from '../enums/RequestEnum';

export class Default {

    private config:Config;
    constructor(config:Config) { this.setConfig(config); }

    ///////////////////
    // Configuration //
    ///////////////////

    public setConfig(config:Config):Default {
        this.config = config;
        axios.defaults.baseURL = config.baseURL + "/api/" + config.version;
        if (config.token) { this.setToken(this.config.token); }
        return this;
    }

    public getConfig():Config { return this.config; }

    ///////////////////
    // Token Options //
    ///////////////////

    /**
     * Gets the current authentication token.
     * @return {string} - Returns the current authentication token.
     */
    public getToken(): string {
        return this.config.token;
    }

    /**
     * Sets the authentication token and updates the default headers.
     * @param {string} token - The authentication token to be set.
     */
    private setToken(token: string): void {
        this.config.token = token;
        axios.defaults.headers.Authorization = `Bearer ${this.config.token}`;
    }

    //////////////
    // Requests //
    //////////////

    private async send(request:Request):Promise<Response> {
        return await axios.request({
            url: request.endpoint,
            method: request.method,
            params: request.params,
            data: request.data,
            headers: request.headers,
        })
        .then(response => {
            let customResponse:Response = {
                axios: response,
                data: response.data,
                status: response.status,
                type: Responses[response.status.toString()] ,
            };
            return customResponse;
        })
        .catch(error => {
            let data = error.response ? error.response.data : error;
            let status = error.response ? error.response.status : error.request.status;
            if (status === 401) {
                // Must login again
            } else {
                let customResponse:Response = {
                    error: error,
                    data: data,
                    status: status,
                    type: Responses[status.toString()],
                };
                return customResponse;
            }
        });
    }

    ////////////////////
    // Default Models //
    ////////////////////

    public ready:boolean = false;
    private endpoint:string|null;
    public setEndpoint(endpoint:string):Default {
        this.endpoint = Endpoints[endpoint] || null;
        this.ready = this.endpoint ? true : false;
        return this;
    }

    public async execute(request:Request) {
        if (!this.ready) { return EmptyResponse; }
        return await this.send(request);
    }

    // Default Requests

    public async index(params?:any):Promise<Response>{
        const request:Request = {
            method: RequestMethod.GET,
            endpoint: this.endpoint,
            params: params
        }
        return await this.execute(request);
    }

    public async show(key:string|number, params?:any) {
        const request:Request = {
            method: RequestMethod.GET,
            endpoint: `/${this.endpoint}/${key}`,
            params: params
        }
        return await this.execute(request);
    }

    // A.C.R.U.D.

    public async all():Promise<Response> { return this.index(); }

    public async create(data:any, params?:any):Promise<Response> {
        const request:Request = {
            method: RequestCRUDMethod.CREATE,
            endpoint: this.endpoint,
            params: params,
            data: data,
        }
        return await this.execute(request);
    }

    public async read(key:string|number, params?:any):Promise<Response> { return await this.show(key, params); }

    public async update(key:string|number, data:any, params?:any, method:RequestMethod = RequestMethod.PUT) {
        const request:Request = {
            method: method,
            endpoint: `/${this.endpoint}/${key}`,
            params: params,
            data: data
        }
        return await this.execute(request);
    }

    public async delete(key:string|number):Promise<Response> {
        const request:Request = {
            method: RequestCRUDMethod.DELETE,
            endpoint: `/${this.endpoint}/${key}`,
        };
        return await this.execute(request);
    }

    // By Methods

    public async get(key?:string|number, params?:any):Promise<Response> { return key ? await this.show(key, params) : await this.index(); }

    public async patch(key:string|number, data:any, params?:any) { return await this.update(key, data, params, RequestMethod.PATCH); }

    public async post(data:any, params?:any):Promise<Response> { return await this.create(data, params); }

    public async put(key:string|number, data:any, params?:any) { return await this.update(key, data, params); }

}

export default Default;