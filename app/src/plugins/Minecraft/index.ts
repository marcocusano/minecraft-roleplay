// Libraries
import { mcsrvstat } from "./controllers/mcsrvstat";
import { MCApi } from "./controllers/MCApi";
import { MCHeads } from "./controllers/MCHeads";
import { MinecraftAPI } from "./controllers/Minecraft-API";
import { Mineskin } from "./controllers/Mineskin";
// Enums
import { AvatarEngine, PingEngine, SkinEngine } from "./enums/Engines";
// Interfaces
import { PingResponse as PingResponseMCSRVSTAT, DebugPingResponse as DeubgPingResponseMCSRVSTAT } from './controllers/mcsrvstat';
import { PingResponse as PingResponseMCApi } from "./controllers/MCApi";
import { PingResponse as PingResponseMinecraftAPI } from "./controllers/Minecraft-API";

/**
 * A Minecraft Library base on a bunch of online API Resources.
 * Soon will be available official Mojan API based instance.
 */
export class Minecraft {

    ///////////////
    // Libraries //
    ///////////////

    public mcsrvstat():mcsrvstat { return new mcsrvstat; }

    /**
     * Execute ping or queries to a Minecraft server, using MCApi.us
     * @returns MCApi Instance
     */
    public MCApi():MCApi { return new MCApi; }

    /**
     * Get Player Skins using mc-heads.net database
     * @returns MCHeads Instance
     */
    public MCHeads():MCHeads { return new MCHeads; }

    /**
     * Execute ping or queries to a Minecraft server, using minecraft-api.com
     * @returns MinecraftAPI Instance
     */
    public MinecraftAPI():MinecraftAPI { return new MinecraftAPI; }

    /**
     * Get Player Skins using mineskin.eu database
     * @returns Mineskin Instance
     */
    public Mineskin():Mineskin { return new Mineskin; }

    /////////
    // SDK //
    /////////

    /**
     * Get Player Avatar
     * @param username Minecraft UUID or Minecraft Nickname
     * @param size // Image size quality (Default: 150px)
     * @returns  // Image URL String
     */
    public avatar(username:string, size?:number):string {
        const engine:AvatarEngine = import.meta.env['VITE_ENGINE_MINECRAFT_AVATAR'];
        switch (engine) {
            case AvatarEngine.MCHeads:
                return this.MCHeads().avatar(username, size);
            case AvatarEngine.Mineskin:
                return this.Mineskin().avatar(username, size);
        }
    }

    /**
     * Ping a Server to get the status and Players
     * @returns 
     */
    public async ping():Promise<PingResponseMCSRVSTAT|DeubgPingResponseMCSRVSTAT|PingResponseMCApi|PingResponseMinecraftAPI> {
        const engine:PingEngine = import.meta.env['VITE_ENGINE_MINECRAFT_PING'];
        switch (engine) {
            case PingEngine.MCApi:
                return this.MCApi().ping();
            case PingEngine.mcsrvstat:
                return this.mcsrvstat().ping();
            case PingEngine.MinecraftAPI:
            default:
                return this.MinecraftAPI().ping();
        }
    }

    /**
     * Get Player Skins using the .env engine
     * @param engine Choose the engine to use ('MCHeads' default or 'MineSkin')
     * @returns 
     */
    public skin(uuid:string):string {
        const engine:SkinEngine = import.meta.env['VITE_ENGINE_MINECRAFT_SKIN'];
        switch (engine) {
            case SkinEngine.Mineskin:
                return this.Mineskin().skin(uuid);
            case SkinEngine.MCHeads:
            default:
                return this.MCHeads().skin(uuid);
        }
    }

}

export default new Minecraft();