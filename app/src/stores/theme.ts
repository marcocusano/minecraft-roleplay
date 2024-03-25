// Vue
import { defineStore } from 'pinia'

// Interfaces
interface ThemeInterface {
    theme: {
        dark:boolean
    }
}

// Data Default
const themeDefaults:ThemeInterface = {
    theme: {
        dark: true
    }
}

export const useThemeStore = defineStore({

    id: 'theme',

    state():ThemeInterface {
        const storedValue = localStorage.getItem('theme');
        return { theme: (storedValue ? JSON.parse(storedValue) : themeDefaults.theme) }; 
    },

    actions: {
        toggleDarkMode(bool:boolean|null = null) {
            this.theme.dark = (bool !== null) ? bool : !this.theme.dark;
            localStorage.setItem('theme', JSON.stringify(this.theme));
        }
    },

});

// Export
export default useThemeStore;