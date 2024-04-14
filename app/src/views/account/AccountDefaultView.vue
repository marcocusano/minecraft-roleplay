<script lang="ts">

// Store
import useUserStore from '@/stores/user'

// Plugins
import { Minecraft } from '@minecraft'
import { StringManager } from '@utilities/StringManager'

// Components
import DefaultBlock from '@/components/blocks/DefaultBlock.vue'
import DefaultCard from '@/components/cards/DefaultCard.vue'
import FontAwesome from '@/components/icons/FontAwesome.vue'
import Grid from '@/components/layouts/Grid.vue';
import ImageSkeleton from '@/components/skeletons/ImageSkeleton.vue'
import ReviewSummary from '@/blocks/Reviews/ReviewSummary.vue'

// Export
import { defineComponent } from 'vue'
export default defineComponent({

    components: {
        DefaultBlock,
        DefaultCard,
        FontAwesome,
        Grid,
        ImageSkeleton,
        ReviewSummary
    },

    data() {
        const account = useUserStore().value;
        return {
            is: {
                loadingAvatar: true
            },
            minecraft: new Minecraft,
            account: account,
            balance: {
                parsed: (new StringManager(account.user.balance.toString())).toCurrency(),
                formatted: (new StringManager(account.user.balance.toString())).toCurrency(false),
                original: account.user.balance
            }
        };
    },

    mounted() {

    }

});

</script>

<template>
    <DefaultCard class="text-center" :title="'Welcome back, ' + account.user.nickname + '!'">
        <template v-slot:pre>
            <ImageSkeleton v-if="is.loadingAvatar" class="mx-auto h-[150px] w-[150px] rounded-xl mb-5" />
            <transition name="fade">
                <img v-show="!is.loadingAvatar" class="block mx-auto rounded-xl mb-5"
                    :src="minecraft.avatar(account.user.nickname)"
                    :class="!is.loadingAvatar ? 'fade-opacity' : ''" @load="is.loadingAvatar = false" />
            </transition>
        </template>
        <Grid :cols="3" class="mt-10">
            <DefaultBlock color="green" size="text-xl w-full" :label="balance.parsed" :title="balance.formatted">
                <template #pre>
                    <FontAwesome icon="piggy-bank mb-2 text-3xl"></FontAwesome>
                </template>
            </DefaultBlock>
            <DefaultBlock color="yellow" label="Job Position" size="text-xl w-full">
                <template #pre>
                    <FontAwesome icon="briefcase mb-2 text-3xl"></FontAwesome>
                </template>
            </DefaultBlock>
            <DefaultBlock color="red" size="text-xl w-full" label="Single">
                <template #pre>
                    <FontAwesome icon="heart mb-2 text-3xl"></FontAwesome>
                </template>
            </DefaultBlock>
        </Grid>
        <ReviewSummary class="mt-10" :justify-center="true"></ReviewSummary>
    </DefaultCard>
</template>