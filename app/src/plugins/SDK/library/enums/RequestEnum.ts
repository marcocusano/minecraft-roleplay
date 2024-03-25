export enum RequestMethod {
    DELETE = "DELETE",
    GET = "GET",
    PATCH = "PATCH",
    POST = "POST",
    PUT = "PUT"
}

export enum RequestCRUDMethod {
    CREATE = RequestMethod.POST,
    READ = RequestMethod.GET,
    UPDATE = RequestMethod.PUT,
    PARTIAL_UPDATE = RequestMethod.PATCH,
    DELETE = RequestMethod.DELETE
}