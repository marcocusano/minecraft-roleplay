<script lang="ts">

// Vue
import { RouterView } from 'vue-router';
// Flowbite
import { initFlowbite } from 'flowbite'

// Components
import Link from '@/components/typography/Link.vue';

// Modules
import DashboardContent from '@/blocks/Dashboard/DashboardContent.vue';
import DashboardMenu from '@/blocks/Dashboard/DashboardMenu.vue';
import DashboardNavbar from '@/blocks/Dashboard/DashboardNavbar.vue';

export default {
    components: {
        // Components
        Link,
        RouterView,
        // Modules
        DashboardContent,
        DashboardMenu,
        DashboardNavbar
    },
    mounted() {
        this.$nextTick(() => { initFlowbite(); });
    }
}

</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900 h-full">
        <!-- Navbar -->
        <DashboardNavbar></DashboardNavbar>
        <!-- Menu -->
        <DashboardMenu></DashboardMenu>
        <!-- Content -->
        <DashboardContent></DashboardContent>
    </div>
</template>