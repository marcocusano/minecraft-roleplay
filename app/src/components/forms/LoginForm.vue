<script lang="ts">

// Components
import Button from '@/components/buttons/SubmitButton.vue'
import Code from '@/components/typography/Code.vue'
import Copyright from '@/components/typography/Copyright.vue'
import FontAwesome from '@/components/icons/FontAwesome.vue'
import Form from '@/components/forms/DefaultForm.vue'
import Headings from '@/components/typography/Headings.vue'
import Link from '@/components/typography/Link.vue'
import LoginCard from '@/components/cards/LoginCard.vue'
import Text from '@/components/typography/Text.vue'
import ToggleDarkmode from '@/components/toggles/ToggleDarkmode.vue'

// Initializator
export default {
    data() {
        return {
            app: {
                name: import.meta.env['VITE_APP_NAME']
            }
        }
    },
    components: {
        Button,
        Code,
        Copyright,
        FontAwesome,
        Form,
        Headings,
        Link,
        LoginCard,
        Text,
        ToggleDarkmode
    }
}
</script>

<template>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 relative">
        <ToggleDarkmode class="absolute top-4 left-4" text="Dark Mode"><Text class="ml-2">Dark or Light</Text></ToggleDarkmode>
        <LoginCard>
            <Link to="/" class="text-center mb-6 mx-auto text-2xl font-bold text-gray-900 dark:text-white">
                <img class="w-12 h-12 mx-auto mb-4" src="/images/logo.png" :alt="app.name">
                <div class="mx-auto">{{ app.name }}</div>
            </Link>
            <Form @submit="" class="mb-6">
                <Button class="mt-5 w-[100%]"><FontAwesome type="fab" icon="discord"></FontAwesome> Discord Login</Button>
                <Text size="sm" class="mt-3">Don’t have an account yet?
                    <Link href="/play">Join our Minecraft Server</Link> and type <Code>/discord</Code> to link your
                    <strong>Minecraft Account</strong> to your <strong>Discord Account</strong>.
                </Text>
            </Form>
            <Copyright class="text-center"></Copyright>
        </LoginCard>
    </div>
</template>