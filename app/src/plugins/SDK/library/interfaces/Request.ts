import { AxiosRequestConfig } from 'axios'
import { RequestCRUDMethod, RequestMethod } from '../enums/RequestEnum'

export interface Request extends AxiosRequestConfig {
    method:RequestMethod|RequestCRUDMethod
    endpoint:string,
}