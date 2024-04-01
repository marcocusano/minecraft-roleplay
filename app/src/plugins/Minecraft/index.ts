import { MCHeads } from "./controllers/MCHeads";
import { MinecraftAPI } from "./controllers/Minecraft-API";
import { Mineskin } from "./controllers/Mineskin";

/**
 * A Minecraft Library base on a bunch of online API Resources.
 * Soon will be available official Mojan API based instance.
 */
export class Minecraft {

    /**
     * Get Player Skins using mc-heads.net database
     * @returns MCHeads Instance
     */
    public mcheads():MCHeads { return new MCHeads; }

    /**
     * Execute ping or queries to a Minecraft server, using minecraft-api.com
     * @returns MinecraftAPI Instance
     */
    public minecraftAPI():MinecraftAPI { return new MinecraftAPI }

    /**
     * Get Player Skins using mineskin.eu database
     * @returns Mineskin Instance
     */
    public mineskin():Mineskin { return new Mineskin; }

    /**
     * Get Player Skins using the .env engine
     * @param engine Choose the engine to use ('MCHeads' default or 'MineSkin0)
     * @returns 
     */
    public skin(engine:'MCHeads'|'Mineskin' = 'MCHeads'):MCHeads|Mineskin {
        switch (engine) {
            case 'Mineskin':
                return new Mineskin;
            case 'MCHeads':
            default:
                return new MCHeads;
        }
    }

}

export default new Minecraft();