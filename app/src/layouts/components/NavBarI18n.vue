<script setup>
import NavBarI18n from '@core/components/I18n.vue'
import { useThemeConfig } from '@core/composable/useThemeConfig'

const { isAppRtl } = useThemeConfig()

const i18nCompLanguages = [
  {
    label: 'English',
    i18nLang: 'en',
  },
  {
    label: 'Italiano',
    i18nLang: 'it',
  },
]

const handleLangChange = lang => {
  isAppRtl.value = lang === 'it'
}
</script>

<template>
  <NavBarI18n
    :languages="i18nCompLanguages"
    @change="handleLangChange"
  />
</template>
