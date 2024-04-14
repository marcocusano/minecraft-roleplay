<script lang="ts">

// Modules
import DashboardMenuBottom from './DashboardMenu/DashboardMenuBottom.vue'
import DashboardMenuCompanies from './DashboardMenu/DashboardMenuCompanies.vue'
import DashboardMenuSearch from './DashboardMenu/DashboardMenuSearch.vue'

// Export
import { defineComponent } from 'vue';
export default defineComponent({
    components: {
        DashboardMenuBottom,
        DashboardMenuCompanies,
        DashboardMenuSearch
    },
});

</script>

<template>
    <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidenav" id="drawer-navigation">
        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <!-- Mobile Search -->
            <DashboardMenuSearch></DashboardMenuSearch>
            <!-- Companies Menu -->
            <DashboardMenuCompanies></DashboardMenuCompanies>
        </div>
        <!-- Bottom Menu -->
        <DashboardMenuBottom></DashboardMenuBottom>
    </aside>
</template>