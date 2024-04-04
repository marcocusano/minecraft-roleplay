<script lang="ts">
// Components
import Flex from '@/components/layouts/Flex.vue';
import Grid from '@/components/layouts/Grid.vue';
import RatingBar from '@/components/ratings/RatingBar.vue';
import RatingStars from '@/components/ratings/RatingStars.vue';
import Text from '@/components/typography/Text.vue';

// Export
export default {

    props: {
        justifyCenter: {
            type: Boolean,
            required: false,
            default: false
        },
        reviews: {
            type: Array<Array<Number>>,
            required: false,
            default: []
        }
    },

    components: {
        Flex,
        Grid,
        RatingBar,
        RatingStars,
        Text
    },

    data() {
        return {
            exists: false,
            votes: 5
        }
    },

    methods: {

        hasReviews():boolean {
            this.exists = this.reviews.length ? true : false;
            return this.exists;
        },

        getAverageValue():number {
            if (this.hasReviews()) {
                const array = this.reviews;
                let counter = 0;
                let total = 0;
                array.forEach((obj:any, index:number) => {
                    const numRecensioni = obj.items.length;
                    counter += numRecensioni;
                    total += numRecensioni * (this.votes - index); // 5 - index perché il punteggio è inversamente proporzionale all'indice
                });
                return parseFloat((total / counter).toFixed(1));
            } else { return 0; }
        },
        
        getPercentage(index:number):number {
            if (this.hasReviews()) {
                const array = this.reviews;
                const indexTotal = array[index].items.length;
                const globalTotal = array.reduce((n:number, obj:any) => n + obj.items.length, 0);
                return parseInt(((indexTotal / globalTotal) * 100).toString());
            } else { return 0; }
        }

    },

    mounted() {
        this.hasReviews();
    },

    watch: {
        reviews(v) {
            this.hasReviews();
        }
    }

}
</script>

<template>
    <div v-if="exists" class="w-full my-5">
        <RatingStars :justify-center="justifyCenter" :value="getAverageValue()" class="mt-5"></RatingStars>
        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ reviews.length }} global ratings</p>
        <div class="mt-4">
            <RatingBar v-for="(e, i) in Array.from({length: votes})" :justify-center="justifyCenter" :percentage="getPercentage(i)" :value="(votes - i)" :label="`${votes - i} star`" class="mb-3"></RatingBar>
        </div>
    </div>
    <div v-else class="block p-10">
        <RatingStars :justify-center="justifyCenter" :value="0" :show-globals="false" star-size="w-10 h-10" class="m-5"></RatingStars>
        <p class="text-xl font-medium text-gray-500 dark:text-gray-400">There aren't reviews to show at the moment.</p>
    </div>
</template>