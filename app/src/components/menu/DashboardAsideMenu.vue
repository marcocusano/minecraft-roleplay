<script lang="ts">

// Interfaces
import { type MenuItem } from '@/data/modules/Menu'

// Components
import FontAwesome from '@/components/icons/FontAwesome.vue';
import Link from '@/components/typography/Link.vue';

export default {

    props: {
        items: {
            type: Array<MenuItem>,
            required: false,
            default: []
        }
    },

    components: {
        FontAwesome,
        Link
    }

}

</script>

<template>
    <ul class="space-y-2">
        <li v-for="item in items">
            <template v-if="item.childs">
                <button type="button" class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" :aria-controls="item.slug" :data-collapse-toggle="item.slug">
                    <FontAwesome v-if="item.icon" class="ml-2 w-6 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" :icon="item.icon.name"></FontAwesome>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">{{ item.label }}</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul :id="item.slug" class="hidden py-2 space-y-2">
                    <li v-for="subItem in item.childs">
                        <Link :href="subItem.link.href" :to="subItem.link.to" :target="item.link.target" class="flex hover:no-underline items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ item.label }}</Link>
                    </li>
                </ul>
            </template>
            <template v-else>
                <Link :href="item.link.href" :to="item.link.to" :target="item.link.target" class="flex hover:no-underline items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <FontAwesome v-if="item.icon" class="ml-2 w-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" :icon="item.icon.name"></FontAwesome>
                    <span class="ml-3">{{ item.label }}</span>
                </Link>
            </template>
        </li>
    </ul>
</template>