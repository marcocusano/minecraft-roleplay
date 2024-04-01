import { MenuItem } from "@/data/modules/Menu"

export interface DefaultCacheInterface {
    value:any,
    expires_at:number
}

interface MenuCacheInterface extends DefaultCacheInterface {
    value:Array<MenuItem>
}

export interface CacheInterface {
    cache: {
        menu:MenuCacheInterface
    }
}