////////////////
// Stylesheet //
////////////////

import './assets/css/tailwind.css'
import './assets/css/style.scss'
import './assets/css/override.scss'

/////////
// Vue //
/////////

import { createApp } from 'vue'

import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

/////////////////
// Application //
/////////////////

// Init
const app = createApp(App);
const pinia = createPinia();

// Mount
app.use(router);
app.use(pinia);
app.mount('#app');

//////////////////////////
// Exportable utilities //
//////////////////////////

export {
    
}
