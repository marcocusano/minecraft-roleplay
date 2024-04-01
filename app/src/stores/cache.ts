// Imports
import { defineStore } from 'pinia'
import Moment from '@/plugins/Moment'
import { CacheInterface } from './interfaces/cache';
import { MenuItem } from '@/data/modules/Menu';

// Defaults
import cacheDefault from './defaults/cache'

// Store
export const useCacheStore = defineStore({

    id: 'cache',

    state():CacheInterface {
        const storedValue = localStorage.getItem('cache');
        return { cache: (storedValue ? JSON.parse(storedValue) : cacheDefault.cache) };
    },

    actions: {

        isExpired(timestamp:number):boolean { return Moment.now() > timestamp ? true : false },

        //////////
        // Menu //
        //////////

        checkMenu():boolean {  return this.isExpired(this.cache.menu.expires_at); },
        saveMenu(items:Array<MenuItem> = []) {
            this.cache.menu = {
                value: items,
                expires_at: Moment().add(import.meta.env['VITE_CACHE_EXPIRATION_MENU'], 'seconds')
            };
            localStorage.setItem('cache', JSON.stringify(this.cache));
        }

    },

});

// Export
export default useCacheStore;