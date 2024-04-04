<script lang="ts">
// Plugins
import Minecraft from '@minecraft'
// Data
import Application from '@/data/modules/Application'
// Components
import IndicatorBadge from '@/components/indicators/IndicatorBadge.vue'
import Tooltip from '@/components/typography/Tooltip.vue'
// Export
export default {
    components: {
        IndicatorBadge,
        Tooltip
    },
    data() {
        return {
            app: Application,
            refs: {
                tooltip: 'MinecraftServerTooltipStatus'
            },
            indicator: {
                color: 'gray',
                label: Application.minecraft.host,
                tooltip: 'Pinging...'
            }
        }
    },
    methods: {
        ping() {
            Minecraft.ping().then(response => {
                this.setIndicator('green', response.players.online || response.players.now + ' Players Online');
                return response;
            }).catch(error => {
                this.setIndicator('red', 'Connection failed!');
                return error;
            });
        },
        setIndicator(color:'blue'|'green'|'yellow'|'red'|'gray', tooltipLabel:string, label?:string) {
            this.indicator.color = color;
            this.indicator.tooltip = tooltipLabel;
            this.indicator.label = label ? label : this.indicator.label;
            return this;
        }
    },
    mounted() {
        setInterval(() => { this.ping(); }, 60000);
    }
}

</script>

<template>
    <IndicatorBadge :data-tooltip-target="refs.tooltip" :color="indicator.color">{{ indicator.label }}</IndicatorBadge>
    <Tooltip :id="refs.tooltip" :label="indicator.tooltip"></Tooltip>
</template>