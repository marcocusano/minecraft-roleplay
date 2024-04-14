<script lang="ts">

// Store
import useCacheStore from '@/stores/cache';

// SDK
import SDK from '@sdk'
import { ResponseType } from '@/plugins/SDK/library/enums/ResponseEnum';
import { Company } from '@/plugins/SDK/api/interfaces/Companies';

// Interfaces
import { MenuItem } from '@/data/modules/Menu'

// Components
import DashboardAsideMenu from '@/components/menu/DashboardAsideMenu.vue'

// Export
import { defineComponent } from 'vue';
export default defineComponent({

    data() {
        return {
            is: {
                loading: false
            },
            items: this.getMenu()
        }
    },

    components: {
        DashboardAsideMenu
    },

    methods: {

        companiesToMenu(companies:any) {
            this.items = [];
            companies.forEach((company:Company) => {
                const item:MenuItem = {
                    slug: company.slug,
                    label: company.name,
                    icon: { name: company.icon },
                    link: { to: '/companies/' + company.slug }
                }
                this.items.push(item);
            });
            this.is.loading = false;
            this.setMenu();
        },

        getMenu():Array<MenuItem> {
            const cache = useCacheStore().cache.menu;
            return (useCacheStore().isExpired(cache.expires_at)) ? [] : cache.value;
        },

        setMenu() { return useCacheStore().saveMenu(this.items); }

    },

    mounted() {
        if (!this.getMenu().length) {
            SDK.companies().all().then(response => {
                this.is.loading = true;
                if (response.type === ResponseType.SUCCESS) {
                    this.companiesToMenu(response.data.data);
                }
            });
        }
    }
});

</script>

<template>
    <DashboardAsideMenu ref="menu" :items="items" :loading="is.loading"></DashboardAsideMenu>
</template>