<script lang="ts">
// SDK
import { Company } from '@/plugins/SDK/api/interfaces/Companies';
// Components
import DashboardSkeleton from '@/components/skeletons/DashboardSkeleton.vue';
import Flex from '@/components/layouts/Flex.vue';
// Export
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        company: {
            type: Object as () => Company,
            required: true
        },
        ready: {
            type: Boolean,
            required: true
        }
    },
    components: {
        DashboardSkeleton,
        Flex
    }
});
</script>

<template>
    <Flex class="mt-5 justify-between">
        <DashboardSkeleton></DashboardSkeleton>
        <DashboardSkeleton></DashboardSkeleton>
        <DashboardSkeleton></DashboardSkeleton>
        <DashboardSkeleton></DashboardSkeleton>
    </Flex>
</template>