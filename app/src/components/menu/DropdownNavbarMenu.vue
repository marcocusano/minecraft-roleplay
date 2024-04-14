<script lang="ts">

// Interfaces
import { type MenuItem } from '@/data/modules/Menu'

// Components
import FontAwesome from '@/components/icons/FontAwesome.vue';
import Link from '@/components/typography/Link.vue';

// Export
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        id: {
            type: String,
            required: true
        },
        name: {
            type: String,
            required: true
        },
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
});

</script>

<template>
    <div class="overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:bg-gray-700 dark:divide-gray-600 hidden" :id="id">
        <div class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300">{{ name }}</div>
        <div class="grid grid-cols-3 gap-4 p-4">
            <Link v-for="item in items" :href="item.link.href" :to="item.link.to" class="block p-4 text-center hover:text-black rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <FontAwesome :icon="item.icon.name" class="mx-auto mb-1 text-xl text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"></FontAwesome>
                <div class="text-sm text-gray-900 dark:text-white">{{ item.label }}</div>
            </Link>
        </div>
    </div>
</template>