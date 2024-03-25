<script lang="ts">

import '@/assets/vendors/fontawesome/css/all.min.css'

export default {

    props: {
        icon: {
            type: String,
            required: true,
        },
        type: {
            type: String,
            required: false,
            default: 'fas'
        }
    }

}

</script>

<template>
    <i :class="type + ' fa-' + icon"></i>
</template>