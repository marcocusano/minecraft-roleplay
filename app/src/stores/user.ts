// Vue
import { defineStore } from 'pinia'

// Libraries
import Moment from '@/plugins/Moment'

// Interfaces
import { UserCacheInterface } from './interfaces/user';
import { UserLogin } from '@/plugins/SDK/api/interfaces/Users';

// Defaults
import userDefaults, { demoUserDefaults } from './defaults/user';
import useCacheStore from './cache';

export const useUserStore = defineStore({

    id: 'user',

    state():UserCacheInterface|null {
        const guestValue:UserCacheInterface = {
            value:userDefaults,
            expires_at: -1
        };
        const storedValue = localStorage.getItem('user');
        if (storedValue) {
            const data:UserCacheInterface = JSON.parse(storedValue);
            return (useCacheStore().isExpired(data.expires_at)) ? guestValue : data;
        } else { return guestValue; }
    },

    actions: {

        login():UserCacheInterface {
            if (import.meta.env['VITE_APP_MODE'] === 'demo') {
                const user:UserLogin = demoUserDefaults;
                const data:UserCacheInterface = {
                    value: user,
                    expires_at: Moment().add(import.meta.env['VITE_CACHE_EXPIRATION_USER'], 'minutes').valueOf()
                };
                localStorage.setItem('user', JSON.stringify(data))
                return data;
            } else {
                // Perform a real login
            }
        },

        logout():null {
            localStorage.removeItem('user');
            return null;
        }

    },
    
});

// Export
export default useUserStore;