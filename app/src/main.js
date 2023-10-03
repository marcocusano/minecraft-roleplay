/* eslint-disable import/order */
import '@/@iconify/icons-bundle'
import App from '@/App.vue'
import layoutsPlugin from '@/plugins/layouts'
import vuetify from '@/plugins/vuetify'
import { loadFonts } from '@/plugins/webfontloader'
import router from '@/router'
import '@core/scss/template/index.scss'
import { library } from "@fortawesome/fontawesome-svg-core"
import { fab } from '@fortawesome/free-brands-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import '@styles/styles.scss'
import { createPinia } from 'pinia'
import { createApp } from 'vue'

library.add(fab, far, fas)

loadFonts()

// Create vue app
const app = createApp(App)


// Use plugins
app.component('FontAwesomeIcon', FontAwesomeIcon)
app.use(vuetify)
app.use(createPinia())
app.use(router)
app.use(layoutsPlugin)

// Mount vue app
app.mount('#app')
