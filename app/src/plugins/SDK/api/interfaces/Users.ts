import { CompanyPermissions, RolePermissions, SelfPermissions } from "./Permissions"

export interface User {
    id:number,
    uuid:string,
    firstname:string|null,
    lastname:string|null,
    nickname:string,
    email:string|null,
    phone:string|null,
    discord:string|null,
    telegram:string|null,
    gender:'M'|'F'|'X',
    curriculum:string|null,
    thirst:number,
    balance:number,
    created_at:string,
    updated_at:string,
}

export interface UserLogin {
    guest:boolean,
    id?:number,
    user?:User,
    permissions?:UserPermissions
}

export interface UserPermissions {
    company:CompanyPermissions,
    role:RolePermissions,
    self:SelfPermissions
}