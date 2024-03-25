import { MCHeads } from "./controllers/MCHeads";
import { Mineskin } from "./controllers/Mineskin";

export class Minecraft {

    public mcheads():MCHeads { return new MCHeads; }
    public mineskin():Mineskin { return new Mineskin; }

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