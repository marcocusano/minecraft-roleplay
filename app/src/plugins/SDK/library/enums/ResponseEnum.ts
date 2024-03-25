export enum ResponseType {
    SUCCESS = 'success',
    ERROR = 'error',
    WARNING = 'warning'
}

export const Responses = {
    "200" : ResponseType.SUCCESS,
    "201" : ResponseType.SUCCESS,
    "202" : ResponseType.SUCCESS,
    "204" : ResponseType.SUCCESS,
    "400" : ResponseType.WARNING,
    "401" : ResponseType.ERROR,
    "403" : ResponseType.ERROR,
    "404" : ResponseType.WARNING,
    "500" : ResponseType.ERROR
}