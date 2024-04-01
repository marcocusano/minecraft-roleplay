import { User } from "./Users"
import { Location } from './Locations'
import { CompanyPermissions, RolePermissions } from "./Permissions"

export interface Company {
    // Model
    id:number,
    parent_id:number,
    owner_id:number,
    location_id:number,
    slug:string,
    name:string,
    description:string,
    location:Location|null,
    icon:string,
    is_government:boolean,
    is_police:boolean,
    is_hackerable:boolean,
    is_master:boolean,
    permissions:CompanyPermissions|null,
    balance:number,
    created_at:string,
    updated_at:string,
    // Relations
    employees?:Array<CompanyEmployee>
    owner?:User,
    parent?:Company,
    roles?:Array<CompanyRole>
}

export interface CompanyEmployee {
    // Model
    company_id:number,
    role_id:number,
    user_id:number,
    // Relations
    company?:Company,
    user?:User,
    role?:CompanyRole
}

export interface CompanyRole {
    // Model
    id:number,
    company_id:number,
    name:string,
    description:string|null,
    permissions:RolePermissions|null,
    salary:number,
    created_at:string,
    updated_at:string
    // Relations
    company?:Company,
    employees?:Array<CompanyEmployee>
}