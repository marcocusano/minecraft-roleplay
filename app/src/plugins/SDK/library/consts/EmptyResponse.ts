import { ResponseType } from "../enums/ResponseEnum";
import { Response } from "../interfaces/Response";

export const EmptyResponse:Response = {
    data: [],
    status: 0,
    type: ResponseType.ERROR
}

export default EmptyResponse;