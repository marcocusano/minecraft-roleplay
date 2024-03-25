<script lang="ts">

// SDK
import SDK from '@sdk'
import { ResponseType } from '@/plugins/SDK/library/enums/ResponseEnum';

// Interfaces
import { MenuItem } from '@/data/modules/Menu'

// Components
import DashboardAsideMenu from '@/components/menu/DashboardAsideMenu.vue'


export default {

    data() {
        const items:Array<MenuItem> = [];
        return {
            items: items
        }
    },

    components: {
        DashboardAsideMenu
    },

    methods: {
        companiesToMenu(companies:any) {
            this.items = [];
            companies.forEach(company => {
                const item:MenuItem = {
                    slug: company.slug,
                    label: company.name,
                    icon: { name: company.icon },
                    link: { to: '/companies/' + company.slug }
                }
                this.items.push(item);
            });
        }
    },

    mounted() {
        SDK.defaultModel().setEndpoint('companies').index().then(response => {
            if (response.type === ResponseType.SUCCESS) {
                this.companiesToMenu(response.data.data);
            }
        });
    }
}

</script>

<template>
    <DashboardAsideMenu :items="items"></DashboardAsideMenu>
</template>