<script lang="ts">

// Interfaces
import { MenuItem } from '@/data/modules/Menu';

// Components
import DropdownToggler from '@/components/dropdowns/DropdownToggler.vue'
import DropdownNavbarMenu from '@/components/menu/DropdownNavbarMenu.vue'

// Export
import { defineComponent } from 'vue';
export default defineComponent({

    props: {
        items: {
            type: Array<MenuItem>,
            required: false,
            default: []
        }
    },

    components: {
        DropdownToggler,
        DropdownNavbarMenu
    },

    data() {
        return {
            dropdown: {
                id: 'dropdown-navbar-apps',
                name: 'Apps'
            }
        }
    }
});

</script>


<template>
    <DropdownToggler :target="dropdown.id">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
            </path>
        </svg>
    </DropdownToggler>
    <DropdownNavbarMenu :id="dropdown.id" :name="dropdown.name" :items="items"></DropdownNavbarMenu>
</template>