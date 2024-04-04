import axios from "axios"

/*
    MCApi
    https://mcapi.us
*/

export interface PingResponse {
  status:string, // The status of the request, typically success unless a poor request is made or my server is having internal troubles. if this is not success, assume the data is bad and should not be used.
  online:boolean, // If the server is online or not
  motd:string, // The server description, also known as the message of the day. some strange formatting may be in this, there are various libraries available for formatting this.
  motd_json:PingResponseMOTD, // 
  favicon:string,
  error:any, // error message from the request. if you forget the IP the error will be missing data. if it is an invalid IP, the error will be invalid hostname or port. if an error starts with internal server error, it means something is wrong with my server. empty means no error.
  players: PingResponsePlayers,
  server:PingResponseServer,
  last_updated:string, // The date the status of the server was last updated at. it updates every five minutes, so you may send requests as soon as it has expired.
  duration:string // The time it took to process the original request, in nanoseconds.
}

export interface PingResponseMOTD {
    extra:Array<PingResponseMOTDExtra>,
    text:string
}

export interface PingResponseMOTDExtra {
    color:string,
    text:string
}

export interface PingResponsePlayers {
    online?:number,
    max:number, // Number of players that the server will allow
    now:number, // Number of players currently online
    sample:Array<any>|null,
}

export interface PingResponseServer {
    name:string, // Current server version name
    protocol:number // Server version protocol
}

export class MCApi {

    private url = import.meta.env['VITE_APP_CORS_URL'] + "https://mcapi.us/server";
    private ip:string; private port:string;
    constructor() {
        this.ip = import.meta.env['VITE_MINECRAFT_SERVER_IP'];
        this.port = import.meta.env['VITE_MINECRAFT_SERVER_PORT'];
        axios.defaults.baseURL = this.url;
    }

    public async ping():Promise<PingResponse>|null {
        if (this.ip) {
            let url = "?ip=" + this.ip;
            if (this.port) { url += "&port=" + this.port; }
            return await axios.get("/status" + url).then(response => { return response.data; });
        } else { return null; }
        
    }

}