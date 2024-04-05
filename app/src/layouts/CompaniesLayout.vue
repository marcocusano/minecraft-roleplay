<script lang="ts">
// SDK
import SDK from '@sdk'
import CompanyDefault, { Company } from '@sdk/api/interfaces/Companies';

// Components
import DefaultCard from '@/components/cards/DefaultCard.vue';

// Export
export default {
    components: {
        DefaultCard
    },
    data() {
        
        return {
            company: this.defaultCompany()
        }
    },
    methods: {
        defaultCompany():Company {
            return CompanyDefault
        }
    },
    mounted() {
        console.log(this.company);
    }
}
</script>

<template>
    <div class="block">
        <DefaultCard>

        </DefaultCard>
    </div>
</template>