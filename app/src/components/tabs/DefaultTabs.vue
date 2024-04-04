<script lang="ts">

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
        }
    },
    components: {
        FontAwesome,
        Link
    },
    methods: {
        isActive(path:string):boolean {
            return (path === this.$router.currentRoute.value.path) ? true : false
        }
    }
}

</script>

<template>
    <div class="border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li v-for="item in items">
                <Link :to="item.link.to" :href="item.link.href" :target="item.link.target" class="inline-flex items-center justify-center p-4 border-b-2 rounded-t-lg group" :class="isActive(item.link.to ? item.link.to : item.link.href ? item.link.href : '') ? ' text-blue-600  border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500' : 'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'">
                    <FontAwesome :icon="item.icon.name" class="w-4 h-4 me-2" :class="isActive(item.link.to ? item.link.to : item.link.href ? item.link.href : '') ? ' text-blue-600 dark:text-blue-500' : 'text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300'"></FontAwesome>
                    {{ item.label }}
                </Link>
            </li>
        </ul>
    </div>
</template>