<script lang="ts">

// Vue
import { RouterView } from 'vue-router';

// Components
import LoginForm from '@/components/forms/LoginForm.vue';

// Export
import { defineComponent } from 'vue';
export default defineComponent({
    components: {
        LoginForm,
        RouterView
    }
});

</script>

<template>
    <section class="bg-gray-50 dark:bg-gray-900">
        <LoginForm @submit=""></LoginForm>
    </section>
</template>