import { Config } from "./library/interfaces/Config";
import { Default as DefaultModel } from "./library/models/Default";

export class SDK {

    // Constructor

    private config:Config;
    constructor() {
        const config:Config = {
            baseURL: import.meta.env['VITE_API_ENDPOINT'],
            version: "v1"
        };
        this.config = config;
    }

    public defaultModel():DefaultModel {  return new DefaultModel(this.config); }

    // Models

    public companies() { return null; }
    
}

export default new SDK();