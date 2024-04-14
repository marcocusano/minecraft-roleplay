<script lang="ts">
// SDK
import { Company } from '@/plugins/SDK/api/interfaces/Companies';
// Data
import { CompaniesMenu, MenuItem } from '@/data/modules/Menu';
// Components
import AvatarContainer from '@/components/avatars/AvatarContainer.vue'
import DefaultCard from '@/components/cards/DefaultCard.vue';
import DefaultTabs from '@/components/tabs/DefaultTabs.vue';
import FontAwesome from '@/components/icons/FontAwesome.vue';
import Heading from '@/components/typography/Heading.vue';
import ImageSkeleton from '@/components/skeletons/ImageSkeleton.vue';
import TextSkeleton from '@/components/skeletons/TextSkeleton.vue';

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
        },
    },
    components: {
        AvatarContainer,
        DefaultCard,
        DefaultTabs,
        FontAwesome,
        Heading,
        ImageSkeleton,
        TextSkeleton
    },
    data() {
        const tabs:Array<MenuItem> = [
            ...CompaniesMenu
        ]
        return {
            tabs: tabs
        }
    },
})
</script>

<template>
    <DefaultCard class="relative mt-7 sm:mt-10">
        <AvatarContainer>
            <Transition name="fade" v-if="ready">
                <FontAwesome :icon="company.icon" class="text-gray-600 dark:text-gray-300 text-7xl fade-opacity" />
            </Transition>
            <ImageSkeleton v-else class="block h-full w-full fade-opacity" />
        </AvatarContainer>
        <div class="absolute top-10 left-48">
            <h1 v-if="ready" class="text-4xl font-bold fade-opacity dark:text-gray-200">{{ company.name }}</h1>
            <TextSkeleton v-else :lines="3" class="fade-opacity"></TextSkeleton>
        </div>
        <DefaultTabs :items="tabs" :prefix="`/companies/${company.slug}`" class="mt-[-30px]"></DefaultTabs>
    </DefaultCard>
</template>