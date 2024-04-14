<script lang="ts">

// Libraries
import { initFlowbite } from 'flowbite'

// Components
import Link from '@/components/typography/Link.vue';
import { RouterView } from 'vue-router';

// Blocks
import DashboardContent from '@/blocks/Dashboard/DashboardContent.vue';
import DashboardMenu from '@/blocks/Dashboard/DashboardMenu.vue';
import DashboardNavbar from '@/blocks/Dashboard/DashboardNavbar.vue';
import StandardFooter from '@/blocks/Dashboard/StandardFooter.vue';

// Export
import { defineComponent } from 'vue';
export default defineComponent({
    components: {
        // Components
        Link,
        RouterView,
        // Blocks
        DashboardContent,
        DashboardMenu,
        DashboardNavbar,
        StandardFooter
    },
    mounted() {
        this.$nextTick(() => { initFlowbite(); });
    }
});

</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900 h-full">
        <!-- Navbar -->
        <DashboardNavbar></DashboardNavbar>
        <!-- Menu -->
        <DashboardMenu></DashboardMenu>
        <!-- Content -->
        <DashboardContent></DashboardContent>
        <!-- Footer -->
        <StandardFooter></StandardFooter>
    </div>
</template>