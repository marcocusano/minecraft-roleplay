<script lang="ts">

import { defineComponent } from 'vue';

// Store
import UserStore from './stores/user';

// Layouts
import DashboardLayout from './layouts/DashboardLayout.vue';
import LoginLayout from './layouts/LoginLayout.vue';
import MainLayout from './layouts/MainLayout.vue';

export default defineComponent({

    components: {
        DashboardLayout,
        LoginLayout,
        MainLayout,
    },

    data() {
        return {
            guest: UserStore().value.guest,
            routerName: this.$router.currentRoute.value.name
        }
    },

    mounted() {
        if (this.guest) {
            console.log("Login to access the Roleplay Management System");
        } else {
            console.log("Welcome to the Roleplay Management System: Free Edition");
        }
    }

});

</script>

<template>
    <MainLayout>
        <LoginLayout v-if="guest"></LoginLayout>
        <DashboardLayout v-else></DashboardLayout>
    </MainLayout>
</template>