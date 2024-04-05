import type { Config, ModelConfig } from "./library/interfaces/Config";
import { Companies } from "./library/models/Companies";
import { Default } from "./library/models/Default";

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

    public default():Default {  return new Default(this.config); }
    
    private getModelConfig(endpoint:string, primary_value?:string|number, primary_key:string = 'id'):ModelConfig {
        return {
            ...this.config,
            endpoint: endpoint,
            primary_key: primary_key,
            primary_value: primary_value
        };
    }

    ////////////
    // Models //
    ////////////

    /**
     * Instance of Companies Management
     * @param id Instance of Companies using whole CRUD methods
     * @returns Instance of Companies using Read or CRUD methods
     */
    public companies(idOrSlug?:number|string):Companies { return new Companies(this.getModelConfig('companies', idOrSlug, (typeof idOrSlug === 'string' ? 'slug' : 'id'))); }
    
}

export default new SDK;