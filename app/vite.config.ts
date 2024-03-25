import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path'

// https://vitejs.dev/config/
export default defineConfig({
    plugins: [
        vue(),
    ],
    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./src', import.meta.url)),
            '@sdk': fileURLToPath(new URL('./src/plugins/SDK/index.ts', import.meta.url)),
            '@minecraft': fileURLToPath(new URL('./src/plugins/Minecraft/index.ts', import.meta.url)),
        }
    }
})
