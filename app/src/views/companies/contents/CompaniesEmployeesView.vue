<script lang="ts">
// Components
import DefaultCard from '@/components/cards/DefaultCard.vue';
import ListSkeleton from '@/components/skeletons/ListSkeleton.vue';
// Export
import { defineComponent } from 'vue';
export default defineComponent({
    components: {
        DefaultCard,
        ListSkeleton
    }
});
</script>

<template>
    <DefaultCard class="mt-5">
        <ListSkeleton />
    </DefaultCard>
    
</template>