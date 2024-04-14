<script lang="ts">
// SDK
import SDK from '@sdk'
import CompanyDefault from '@sdk/api/interfaces/Companies';
// Components
import { RouterView } from 'vue-router';
// Export
import { defineComponent } from 'vue';
export default defineComponent({
    components: {
        RouterView
    },
    data() {
        const slug:string = this.getSlug();
        return {
            slug: slug,
            data: CompanyDefault,
            ready: false,
        }
    },
    methods: {
        fetchData() {
            SDK.companies(this.slug).get().then(response => {
                this.data = response.data.data;
                this.ready = true;
            });
        },
        getSlug():string {
            return typeof this.$route.params.slug === 'string' ? this.$route.params.slug : this.$route.params.slug[0]
        }
    },
    mounted() {
        this.fetchData();
    },
    watch: {
        $route() {
            if (this.getSlug() !== this.slug) {
                this.ready = false;
                this.slug = this.getSlug();
                this.fetchData();
            }
        }
    }
});
</script>

<template>
    <div class="block">
        <RouterView :company="data" :ready="ready" :slug="slug"></RouterView>
        <RouterView :company="data" :ready="ready" name="content"></RouterView>
    </div>
</template>