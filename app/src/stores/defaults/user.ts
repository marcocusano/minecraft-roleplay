import { UserLogin } from "@/plugins/SDK/api/interfaces/Users";

import Minecraft from "@/plugins/Minecraft";

export const demoUserDefaults:UserLogin = {
    guest: false,
    user: {
        id: 1,
        uuid: "8d4a100d738d40da9f3b8889a11527dc",
        firstname: 'Markus',
        lastname: 'Cohen',
        nickname: "Rivenworth",
        email: "rivenworth@roleplay.test",
        phone: "+393331234567",
        discord: "197337539105914890",
        telegram: null,
        curriculum: null,
        gender: 'M',
        thirst: 100,
        balance: 10457873924,
        created_at: '1992-10-25T07:30:00',
        updated_at: '2024-05-01T14:30:00'
    },
    permissions: {
        company: {
            can_read_all_balances: true,
            can_read_all_companies: true,
            can_read_all_employees: true,
        },
        role: {
            "dashboard": {
                create: true,
                read: true,
                update: true,
                delete: true,
            },
            "employees": {
                create: true,
                read: true,
                update: true,
                delete: true
            },
            "transactions": {
                create: true,
                read: true,
                update: true,
                delete: true
            }
        },
        self: {
            is_admin: true,
            is_broker: true,
            is_hacker: true,
            is_manager: true,
            is_seller: true,
            mr_president: true
        }
    }
}

export const userDefaults:UserLogin = {
    guest: true
};

export default userDefaults;