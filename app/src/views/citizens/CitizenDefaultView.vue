<script lang="ts">

// Components
import DefaultCard from '@/components/cards/DefaultCard.vue'

export default {

    components: {
        DefaultCard
    },

    data() {
        return {
            username: 'Citizen'
        };
    }

}

</script>

<template>
    <div class="w-2/5 p-4">
        <DefaultCard class="text-center" :title="'Welcome back, ' + username + '!'"></DefaultCard>
    </div>
</template>