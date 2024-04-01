export interface CRUD {
    create?:boolean,
    read:boolean,
    update?:boolean,
    delete?:boolean
}

export interface CompanyPermissions {
    can_read_all_balances:boolean,
    can_read_all_companies:boolean,
    can_read_all_employees:boolean,
}

export interface RolePermissions {
    ////////////
    // Global //
    ////////////
    "dashboard":CRUD,
    "employees":CRUD,
    "transactions":CRUD,
    /////////////////
    // Per Company //
    /////////////////
    // Banking
    "banking.cards"?:CRUD,
    "banking.trading"?:CRUD,
    "banking.transfers"?:CRUD,
    // CyberTek
    "cybertek.security"?:CRUD,
}

export interface SelfPermissions {
    is_admin:boolean,
    is_broker:boolean,
    is_hacker:boolean,
    is_manager:boolean,
    mr_president:boolean
    is_seller:boolean
}