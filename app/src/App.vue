<script lang="ts">

// Store
import UserStore from './stores/user';

// Layouts
import DashboardLayout from './layouts/DashboardLayout.vue';
import LoginLayout from './layouts/LoginLayout.vue';
import MainLayout from './layouts/MainLayout.vue';

export default {

    components: {
        DashboardLayout,
        LoginLayout,
        MainLayout,
    },

    data() {
        return {
            guest: UserStore().user.guest,
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

}

</script>

<template>
    <MainLayout>
        <LoginLayout v-if="guest"></LoginLayout>
        <DashboardLayout v-else></DashboardLayout>
    </MainLayout>
</template>