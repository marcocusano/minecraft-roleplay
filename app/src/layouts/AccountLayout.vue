<script lang="ts">

// Data
import { AccountMenu } from '@/data/modules/Menu';

// Components
import { RouterView } from 'vue-router'
import Tabs from '@/components/tabs/DefaultTabs.vue'
import Card from '@/components/cards/DefaultCard.vue';

export default {
    components: {
        Card,
        Tabs
    },

    data() {
        return {
            menuItems: AccountMenu
        }
    }
}

</script>

<template>
    <div class="lg:flex block">
        <div class="lg:w-2/5 w-full p-4">
            <RouterView />
        </div>
        <div class="lg:w-3/5 w-full p-4">
            <Card>
                <Tabs :items="menuItems" class="mb-5"></Tabs>
                <RouterView name="content"></RouterView>
            </Card>
        </div>
    </div>
</template>