import { UserLogin } from '@/plugins/SDK/api/interfaces/Users'
import { DefaultCacheInterface } from './cache'

export interface UserCacheInterface extends DefaultCacheInterface {
    value:UserLogin
}