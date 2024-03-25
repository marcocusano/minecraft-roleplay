<script lang="ts">

// Interfaces 
import type { RouteLocationNormalizedLoaded } from 'vue-router';

// Enum
enum DashboardLayout {
    ACCOUNT,
    DEFAULT
}

// Layouts
import AccountLayout from '@/layouts/AccountLayout.vue'

export default {

    components: {
        AccountLayout
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
        <RouterView v-else></RouterView>
    </main>
</template>