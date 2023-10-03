<script setup>
import { useGenerateImageVariant } from '@/@core/composable/useGenerateImageVariant'
import authV1LoginMaskDark from '@images/pages/auth-v1-login-mask-dark.png'
import authV1LoginMaskLight from '@images/pages/auth-v1-login-mask-light.png'
import { VNodeRenderer } from '@layouts/components/VNodeRenderer'
import { themeConfig } from '@themeConfig'

const authV1ThemeLoginMask = useGenerateImageVariant(authV1LoginMaskLight, authV1LoginMaskDark)
const minecraft_ip = import.meta.env.VITE_MINECRAFT_IP
</script>

<template>
  <div class="auth-wrapper d-flex align-center justify-center pa-4">
    <VCard
      class="auth-card pa-2 pt-7"
      max-width="448"
    >
      <VCardItem class="justify-center">
        <template #prepend>
          <div class="me-n2">
            <VNodeRenderer :nodes="themeConfig.app.logo" />
          </div>
        </template>
      </VCardItem>

      <VCardText class="pt-2 text-center">
        <h5 class="text-h5 mb-1">
          Welcome to <span class="text-capitalize">{{ themeConfig.app.title }}! 👋🏻</span>
        </h5>

        <p class="mb-0">
          Please sign-in to your account and start the new adventure on a Digital World!
          <br><br>
          If you didn't yet, join our Minecraft Server and type <code>/discord</code> to bind your Minecraft Account to your Discord Account or you will be unable to join.
        </p>
      </VCardText>

      <VCardText>
        <VForm
          method="GET"
          action="https://discord.com/oauth2/authorize"
        >
          <VRow>
            <VCol cols="12">
              <!-- login button -->
              <VBtn
                block
                type="submit"
                @onclick="window.location.href='/'"
              >
                <FontAwesomeIcon
                  icon="fab fa-discord"
                  class="mr-2"
                /> Discord Login
              </VBtn>
            </VCol>

            <!-- create account -->
            <VCol
              cols="12"
              class="text-center text-base"
            >
              <span>Are you a new Citizen?</span> Join now <code>{{ minecraft_ip }}</code>
            </VCol>

            <VCol
              cols="12"
              class="text-center"
            >
              <span class="mx-4">Made with <FontAwesomeIcon icon="fas fa-heart" /> by <a
                href="https://www.marcocusano.dev"
                target="noopener noreferer"
              > Marco Cusano</a></span>
            </VCol>
          </VRow>
        </VForm>
      </VCardText>
    </VCard>
    <VImg
      :src="authV1ThemeLoginMask"
      class="d-none d-md-block auth-footer-mask"
    />
  </div>
</template>

<style lang="scss">
@use "@core/scss/template/pages/page-auth.scss";
</style>

<route lang="yaml">
meta:
  layout: blank
</route>
