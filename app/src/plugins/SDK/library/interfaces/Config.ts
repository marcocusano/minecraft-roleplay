export interface Config {
    baseURL:string,
    token?:string,
    version:'v1'
}

export interface ModelConfig extends Config {
    primary_key?:string,
    primary_value?:string|number,
    endpoint:string
}