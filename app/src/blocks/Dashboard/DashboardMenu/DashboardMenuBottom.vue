<script lang="ts">

// Data
import ApplicationData, { Application as ApplicationClass } from '@/data/modules/Application';

// Icons
import { BookOpenIcon  } from '@heroicons/vue/24/solid'
import FontAwesome from '@/components/icons/FontAwesome.vue';

// Components
import Badge from '@/components/badges/DefaultBadge.vue'
import Link from '@/components/typography/Link.vue'
import Text from '@/components/typography/Text.vue'
import Tooltip from '@/components/typography/Tooltip.vue'

// Modules
import DashboardMenuBottomLanguage from './DashboardMenuBottom/DashboardMenuBottomLanguage.vue'

export default {
    components: {
        // Icons
        BookOpenIcon,
        FontAwesome,
        // Components
        Badge,
        Link,
        Text,
        Tooltip,
        // Modules
        DashboardMenuBottomLanguage,
    },
    data() {
        const app = ApplicationData;
        return {
            app: app,
            release: (new ApplicationClass).releaseToLabel(app.release),
            tooltips: {
                changes: 'tooltip-changes',
                documentation: 'tooltip-documentation',
                github: 'tooltip-github'
            }
        }
    },

}

</script>

<template>
    <div class="hidden absolute bottom-0 left-0 justify-center px-4 mt-4 space-x-4 w-full  lg:flex bg-white dark:bg-gray-800 z-20">
        <div class="border-t border-gray-200 justify-center dark:border-gray-700 w-[100%] py-4 lg:flex">
            <!-- Help -->
            <Link to="/documentation" :data-tooltip-target="tooltips.documentation" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"><BookOpenIcon class="w-6 h-6"></BookOpenIcon></Link>
            <Tooltip :id="tooltips.documentation" label="Documentation"></Tooltip>

            <!-- Open Source -->
            <Link :href="app.social.github" target="_blank" :data-tooltip-target="tooltips.github" class="inline-flex hover:no-underline text-2xl justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600"><FontAwesome type="fab" icon="github"></FontAwesome></Link>
            <Tooltip :id="tooltips.github" label="GitHub"></Tooltip>

            <!-- Changes -->
            <Link to="/changes" :data-tooltip-target="tooltips.changes" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600">
                {{ app.version }}
                <Badge class="ml-2 mr-0" :color="app.release">{{ release }}</Badge>
            </Link>
            <Tooltip :id="tooltips.changes" label="Changes"></Tooltip>
            
            <!-- Language Selector -->
            <!-- Coming Soon -->
        </div>
    </div>
</template>