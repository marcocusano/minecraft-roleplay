import { AxiosResponse, AxiosError } from "axios";
import { ResponseType } from "../enums/ResponseEnum";

export interface Response {
    axios?:AxiosResponse,
    data:any,
    error?:AxiosError
    type:ResponseType
    message?:string,
    status:number
}