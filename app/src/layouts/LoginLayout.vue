<script lang="ts">

// Vue
import { RouterView } from 'vue-router';

// Components
import LoginForm from '@/components/forms/LoginForm.vue';

// Initializator
export default {
    components: {
        LoginForm,
        RouterView
    }
}

</script>

<template>
    <section class="bg-gray-50 dark:bg-gray-900">
        <LoginForm @submit=""></LoginForm>
    </section>
</template>