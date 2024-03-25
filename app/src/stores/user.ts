// Vue
import { defineStore } from 'pinia'

// Interfaces
interface UserInterface {
    user: {
        guest:boolean,
        id:number,
        permissions:Array<any>
    }
}

// Data Default
const userDefaults:UserInterface = {
    user: {
        guest: false,
        id: null,
        permissions: []
    }
}

export const useUserStore = defineStore({

    id: 'user',

    state():UserInterface {
        const storedValue = localStorage.getItem('user');
        return { user: (storedValue ? JSON.parse(storedValue) : userDefaults.user) }; 
    },

    actions: {

        login() {

        },

        logout() {

        }

    },
    
});

// Export
export default useUserStore;