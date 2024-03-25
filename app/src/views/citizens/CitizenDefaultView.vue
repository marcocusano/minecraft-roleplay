<script lang="ts">

// Plugins
import { Minecraft }from '@minecraft'

// Components
import DefaultCard from '@/components/cards/DefaultCard.vue'

export default {

    components: {
        DefaultCard
    },

    data() {
        return {
            biography: "Hey there! I'm Marco, a professional Web Developer.",
            engine: {
                skin: import.meta.env['VITE_MINECRAFT_SKIN_ENGINE']
            },
            minecraft: new Minecraft,
            username: 'Rivenworth',
        };
    }

}

</script>

<template>
    <div class="w-2/5 p-4">
        <DefaultCard class="text-center" :title="'Welcome back, ' + username + '!'" :description="biography">
            <template v-slot:pre>
                <img class="block mx-auto rounded-xl mb-5" :src="minecraft.skin(engine.skin).avatar(username)" />
            </template>
            
        </DefaultCard>
    </div>
</template>