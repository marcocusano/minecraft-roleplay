<script lang="ts">
// Data
import Application from '@/data/modules/Application';
// Components
import Copyright from '@/components/typography/Copyright.vue';
import FontAwesome from '@/components/icons/FontAwesome.vue';
import Link from '@/components/typography/Link.vue';
import Text from '@/components/typography/Text.vue';
// Export
export default {
    components: {
        Copyright,
        FontAwesome,
        Link,
        Text,
    },
    data() {
        return {
            app: Application,
        }
    },
}
</script>

<template>
    <footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
        <div class="md:pl-64 md:pr-4 w-full">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="/images/logo.png" class="mr-3 h-8" :alt="app.name" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ app.shortName }}</span>
                    </a>
                    <div class="block mt-4 max-w-96">
                        <Text class="text-gray-600 dark:text-gray-400 mt-4">{{ app.description }}</Text>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4"><a :href="app.social.postman" target="_blank" class="hover:underline">Postman API</a></li>
                            <li><Link to="/documentation" class="hover:underline">Documentation</Link></li>
                        </ul>
                    </div>
                    <div class="block lg:block md:hidden sm:hidden xs:hidden">
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow me</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a :href="app.social.github" target="_blank" class="hover:underline">GitHub</a>
                            </li>
                            <li>
                                <a :href="app.social.discord" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <Link to="/privacy" class="hover:underline">Privacy Policy</Link>
                            </li>
                            <li>
                                <Link to="/terms" class="hover:underline">Terms &amp; Conditions</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <Copyright></Copyright>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a v-if="app.socials.discord" :href="app.socials.discord" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <FontAwesome type="fab" icon="discord" class="text-xl"></FontAwesome>
                    </a>
                    <a v-if="app.socials.facebook" :href="app.socials.facebook" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <FontAwesome type="fab" icon="facebook" class="text-xl"></FontAwesome>
                    </a>
                    <a v-if="app.socials.instagram" :href="app.socials.instagram" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <FontAwesome type="fab" icon="instagram" class="text-xl"></FontAwesome>
                    </a>
                    <a v-if="app.socials.telegram" :href="app.socials.telegram" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <FontAwesome type="fab" icon="telegram" class="text-xl"></FontAwesome>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>