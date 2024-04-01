import { CacheInterface } from "../interfaces/cache";
import { MenuItem } from "@/data/modules/Menu";

const defaults:CacheInterface = {
    cache: {
        menu: {
            value: [] as Array<MenuItem>,
            expires_at: 0
        }
    }
}

export default defaults;