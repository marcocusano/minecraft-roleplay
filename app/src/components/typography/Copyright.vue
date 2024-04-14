<script lang="ts">

// Components
import FontAwesome from '@/components/icons/FontAwesome.vue'
import Link from './Link.vue'
import Text from './Text.vue'

// Export
import { defineComponent } from 'vue';
export default defineComponent({
    components: {
        FontAwesome,
        Link,
        Text
    }
});

</script>

<template>
    <Text>Built with <FontAwesome icon="heart"></FontAwesome> by <Link href="https://www.marcocusano.dev" target="_blank">Marco Cusano</Link></Text>
</template>