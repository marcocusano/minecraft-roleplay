// SDK
import { Model } from "./Default"
import { Request } from "../interfaces/Request";
import { RequestMethod } from "../enums/RequestEnum";
// Model
import type { Company } from "../../api/interfaces/Companies";
import type { CompanyIndex, CompanyShow } from "../resources/Companies"

// Class
export class Companies extends Model {

    /**
     * Get all Companies
     * @returns // Response with Array of Company Interface objects in .data
     */
    public async all():Promise<CompanyIndex> { return await this._all(); }

    public async create(data:Company):Promise<CompanyShow> {
        const request:Request = {
            endpoint: this.getEndpoint(),
            method: RequestMethod.POST,
            data: data
        };
        return await this.execute(request);
    }

    /**
     * Get an existing Company
     * @returns // Response with the Company Interface object in .data
     */
    public async get():Promise<CompanyShow> { return await this._get(); }

    /**
     * Update an existing Company
     * @param data Company Interface
     * @returns // Response with the updated Company interface object in .data
     */
    public async update(data:Company):Promise<CompanyShow> {
        const request:Request = {
            endpoint: this.getEndpoint(),
            method: RequestMethod.PUT,
            data: data
        };
        return await this.execute(request);
    }

}