import axios from "axios"

/*
    MCHeads
    https://mc-heads.net/
*/

export interface PingResponse {
    online:boolean,
    ip:string,
    port:number,
    hostname?:string,
    debug?:PingResponseDebug,
    version:string|Array<string>,
    protocol?:PingResponseProtocol,
    icon?:string,
    software?:string,
    map:PingResponseMap,
    gamemode?:string,
    serverid?:string,
    eula_block?:boolean,
    motd?:PingResponseMOTD,
    players?:PingResponsePlayers,
    plugins?:Array<Plugin>,
    mods?:Array<Mod>,
    info?:Info
}

export interface PingResponseDebug {
    ping:boolean,
    query:boolean,
    srv:boolean,
    querymistmatch:boolean,
    ipinsrv:boolean,
    cnameinsrv:boolean,
    animatedmotd:boolean,
    cachehit:boolean,
    cachetime:number,
    cacheexpire:number,
    apiversion:number
}

export interface PingResponseProtocol {
    version:number,
    name:string
}

export interface PingResponseMap {
    raw:string,
    clean:string,
    html:string
}

export interface PingResponseMOTD {
    raw: Array<string>,
    clean: Array<string>,
    html: Array<string>
}

export interface PingResponsePlayers {
    now?:number,
    online:number,
    max:number,
    list?:Array<Players>,
    sample?:Array<any>
}

export interface Players {
    name:string,
    uuid:string
}

export interface Plugin {
    name:string,
    version:string
}

export interface Mod extends Plugin {}

export interface Info extends PingResponseMOTD {}

export interface DebugPingResponse {
    version:DebugPingResponseVersion,
    players:PingResponsePlayers,
    description:DebugPingResponseDescription,
    favicon:string
}

export interface DebugPingResponseVersion {
    protocol:number,
    name:string,
}

export interface DebugPingResponseDescription {
    text:string
}

export class mcsrvstat {

    private url = import.meta.env['VITE_APP_CORS_URL'] + "https://mcapi.us/server";
    private ip:string; private port:string;
    constructor() {
        this.ip = import.meta.env['VITE_MINECRAFT_SERVER_IP'];
        this.port = import.meta.env['VITE_MINECRAFT_SERVER_PORT'];
        axios.defaults.baseURL = this.url;
    }

    public async debug():Promise<DebugPingResponse|null> {
        if (this.ip) {
            return await axios.get("/debug/ping/" + this.ip).then(response => { return response.data; });
        } else { return null; }
    }

    public async ping(debugMode:boolean = false):Promise<PingResponse|DebugPingResponse|null> {
        if (this.ip) {
            if (debugMode) { return await this.debug(); }
            return await axios.get("/3/" + this.ip).then(response => { return response.data; });
        } else { return null; }
        
    }

}