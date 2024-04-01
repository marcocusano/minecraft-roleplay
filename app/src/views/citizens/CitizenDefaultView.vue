<script lang="ts">

// Store
import useUserStore from '@/stores/user';

// Plugins
import { Minecraft } from '@minecraft'

// Components
import DefaultCard from '@/components/cards/DefaultCard.vue'
import ImageSkeleton from '@/components/skeletons/ImageSkeleton.vue';

export default {

    components: {
        DefaultCard,
        ImageSkeleton
    },

    data() {
        return {
            is: {
                loadingAvatar: true
            },
            biography: "Hey there! I'm Marco, a professional Web Developer.",
            engine: { skin: import.meta.env['VITE_MINECRAFT_SKIN_ENGINE'] },
            minecraft: new Minecraft,
            account: useUserStore().value
        };
    },

    mounted() {

    }

}

</script>

<template>
    <div class="w-2/5 p-4">
        <DefaultCard class="text-center" :title="'Welcome back, ' + account.user.nickname + '!'">
            <template v-slot:pre>
                <ImageSkeleton v-if="is.loadingAvatar" class="mx-auto h-[150px] w-[150px] rounded-xl mb-5" />
                <transition name="fade">
                    <img v-show="!is.loadingAvatar" class="block mx-auto rounded-xl mb-5" :src="minecraft.skin(engine.skin).avatar(account.user.nickname)" :class="!is.loadingAvatar ? 'fade-opacity' : ''" @load="is.loadingAvatar = false" />
                </transition>
            </template>
        </DefaultCard>
    </div>
</template>