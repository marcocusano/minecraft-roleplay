<script lang="ts">

// Interfaces 
import type { RouteLocationNormalizedLoaded } from 'vue-router';

// Enum
enum DashboardLayout {
    ACCOUNT,
    DASHBOARD,
    DEFAULT
}

// Layouts
import AccountLayout from '@/layouts/AccountLayout.vue'
import CompaniesLayout from '@/layouts/CompaniesLayout.vue'

export default {

    components: {
        AccountLayout,
        CompaniesLayout
    },

    data() {
        return {
            layout: {
                type: DashboardLayout,
                current: DashboardLayout.DEFAULT
            }
        }
    },

    watch: {
        '$route'(newRoute:RouteLocationNormalizedLoaded) {
            switch (newRoute.meta.layout) {
                case 'account':
                    this.layout.current = DashboardLayout.ACCOUNT;
                    break;
                case 'companies':
                    this.layout.current = DashboardLayout.DASHBOARD
                    break;
                default:
                    this.layout.current = DashboardLayout.DEFAULT
                    break;
            }
        }
    }

}

</script>

<template>
    <main class="p-4 md:ml-64 h-auto pt-20">
        <AccountLayout v-if="layout.current === layout.type.ACCOUNT"></AccountLayout>
        <CompaniesLayout v-if="layout.current === layout.type.DASHBOARD"></CompaniesLayout>
        <RouterView v-else></RouterView>
    </main>
</template>