<script setup lang="ts">

// Components
import { RouterView } from 'vue-router'

</script>

<template>
    <div class="flex">
        <router-view />
        <router-view name="content" />
    </div>
</template>