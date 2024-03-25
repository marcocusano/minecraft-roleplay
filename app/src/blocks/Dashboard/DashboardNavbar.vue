<script lang="ts">

// Data
import MenuData from '@/data/modules/Menu'

// Modules
import DashboardNavbarAccount from './DashboardNavbar/DashboardNavbarAccount.vue'
import DashboardNavbarAdmin from './DashboardNavbar/DashboardNavbarAdmin.vue'
import DashboardNavbarApps from './DashboardNavbar/DashboardNavbarApps.vue'
import DashboardNavbarDrawer from './DashboardNavbar/DashboardNavbarDrawer.vue'
import DashboardNavbarLogo from './DashboardNavbar/DashboardNavbarLogo.vue'
import DashboardNavbarNotifications from './DashboardNavbar/DashboardNavbarNotifications.vue'
import DashboardNavbarSearch from './DashboardNavbar/DashboardNavbarSearch.vue'

// Components
import ToggleDarkmode from '@/components/toggles/ToggleDarkmode.vue'

export default {

    components: {
        // Modules
        DashboardNavbarAccount,
        DashboardNavbarAdmin,
        DashboardNavbarApps,
        DashboardNavbarDrawer,
        DashboardNavbarLogo,
        DashboardNavbarNotifications,
        DashboardNavbarSearch,
        // Components
        ToggleDarkmode
    },

    data() {
        return {
            menu: MenuData
        }
    }

}

</script>

<template>
    <nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                <!-- Drawer -->
                <DashboardNavbarDrawer></DashboardNavbarDrawer>
                <!-- Logo -->
                <DashboardNavbarLogo></DashboardNavbarLogo>
                <!-- Search -->
                <DashboardNavbarSearch></DashboardNavbarSearch>
            </div>
            <div class="flex items-center lg:order-2">
                <button type="button" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    <span class="sr-only">Toggle search</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                        </path>
                    </svg>
                </button>
                <!-- Notifications
                <DashboardNavbarNotifications></DashboardNavbarNotifications>
                -->
                <!-- Darkmode Toggler -->
                <ToggleDarkmode></ToggleDarkmode>
                <!-- Administration Area -->
                <DashboardNavbarAdmin :items="menu.admin"></DashboardNavbarAdmin>
                <!-- Apps -->
                <DashboardNavbarApps :items="menu.apps"></DashboardNavbarApps>
                <!-- Account -->
                <DashboardNavbarAccount :items="menu.account"></DashboardNavbarAccount>
            </div>
        </div>
    </nav>
</template>