import axios from 'axios'

/*
    Minecraft API
    https://minecraft-api.com
*/

export interface PingResponse {
    version: {
        protocol:number,
        name:string
    },
    players: {
        online:number,
        max:number,
        sample:Array<any>
    },
    description: {
        extra?: [{
            bold?:boolean,
            color?:string,
            text:string
        }]
        text:string
    },
    favicon:string
}

export interface PseudoResponse {
    pseudo:string
}

export interface UUIDResponse {
    uuid:string
}

export class MinecraftAPI {
    
    private url:string = "//minecraft-api.com/api";
    private ip:string = null;
    private port:string = null;
    private queryPort:string = null;
    constructor() {
        this.ip = import.meta.env['VITE_MINECRAFT_SERVER_IP'];
        this.port = import.meta.env['VITE_MINECRAFT_SERVER_PORT'];
        this.queryPort = import.meta.env['VITE_MINECRAFT_SERVER_QUERYPORT'];
        axios.defaults.baseURL = this.url;
    }

    /**
     * Execute a Ping to a Minecraft Server
     * @returns PingResponse Interface
     */
    public async ping():Promise<PingResponse>|null {
        if (this.ip && this.port) {
            return await axios.get(`/ping/${this.ip}/${this.port}/json`).then(response => { return JSON.parse(response.data); })
        } else { return null; }
    }

    /**
     * Get a Player Nickname by UUID
     * @param uuid Minecraft UUID Player
     * @returns PseudoResponse Interface
     */
    public async pseudo(uuid:string):Promise<PseudoResponse> {
        return await axios.get(`/pseudo/${uuid}/json`).then(response => { return JSON.parse(response.data); });
    }

    /**
     * Execute a Query to a Minecraft Server
     * @returns JSON Parsed data
     */
    public async query():Promise<any>|null {
        if (this.ip && this.queryPort) {
            return await axios.get(`/ping/${this.ip}/${this.queryPort}/json`).then(response => { return JSON.parse(response.data); })
        } else { return null; }
    }

    /**
     * Get Player UUID by Nickname
     * @param pseudo Minecraft Player Nickname
     * @returns UUIDResponse Interface
     */
    public async uuid(pseudo:string):Promise<UUIDResponse> {
        return await axios.get(`/uuid/${pseudo}/json`).then(response => { return JSON.parse(response.data); })
    }

}