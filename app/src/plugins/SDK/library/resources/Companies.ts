import { Company } from "../../api/interfaces/Companies";
import { Response } from "../interfaces/Response";

export interface CompanyIndex extends Response {
    data: {
        data: Array<Company>
    }
}

export interface CompanyShow extends Response {
    data: {
        data: Company
    }
}