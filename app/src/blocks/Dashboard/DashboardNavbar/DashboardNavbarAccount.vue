<script lang="ts">

// Store
import useUserStore from '@/stores/user';

// Plugins
import { Minecraft } from '@minecraft';

// Interfaces
import { MenuItem } from '@/data/modules/Menu';

// Components
import Link from '@/components/typography/Link.vue';
import FontAwesome from '@/components/icons/FontAwesome.vue';

export default {

    props: {
        items: {
            type: Array<MenuItem>,
            required: false,
            default: []
        }
    },

    components: {
        Link,
        FontAwesome
    },

    data() {
        return {
            engine: { skin: import.meta.env['VITE_MINECRAFT_SKIN_ENGINE'] },
            minecraft: new Minecraft,
            user: useUserStore().value.user,
        }
    }

}

</script>

<template>
    <button type="button"
        class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown-user">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" :src="minecraft.skin(engine.skin).avatar(user.nickname)" @error="this.src = 'https://i.pravatar.cc/64'" alt="user photo" />
    </button>
    <!-- Dropdown menu -->
    <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
        <div class="py-3 px-4">
            <span class="block text-sm font-semibold text-gray-900 dark:text-white">{{ `${user.firstname} ${user.lastname}` }}</span>
            <span class="block text-sm text-gray-900 truncate dark:text-white">{{ user.email ? user.email : user.phone ? user.phone : user.discord }}</span>
        </div>
        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <li v-for="item in items">
                <Link :href="item.link.href" :to="item.link.to" :target="item.link.target" class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <FontAwesome v-if="item.icon" :icon="item.icon.name" class="text-md w-6"></FontAwesome>
                    {{ item.label }}
                </Link>
            </li>
        </ul>
        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <li><a href="/logout" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a></li>
        </ul>
    </div>
</template>