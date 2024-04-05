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

// Default

const def:Company = {
    id: null,
    parent_id: null,
    owner_id: null,
    location_id: null,
    slug: null,
    name: null,
    description: null,
    location:null,
    icon: null,
    is_government: false,
    is_police: false,
    is_hackerable: false,
    is_master: false,
    permissions: null,
    balance: 0,
    created_at: null,
    updated_at: null,
    // Relations
    employees: [],
    owner: null,
    parent: null,
    roles: []
}

export default def;