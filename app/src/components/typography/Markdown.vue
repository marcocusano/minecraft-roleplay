<script lang="ts">
// Markdown Assets
import '@/assets/css/markdown.scss';
import markdownit from 'markdown-it'
// Code Highlights
import hljs from 'highlight.js';
import 'highlight.js/styles/github.css';

// Initialize Markdown-It
const markdown = markdownit({
    linkify: true,
    highlight: function (str, lang) {
        if (lang && hljs.getLanguage(lang)) {
            try {
                return '<pre><code class="hljs">' +
                    hljs.highlight(str, { language: lang, ignoreIllegals: true }).value +
                    '</code></pre>';
            } catch (__) { }
        }

        return '<pre><code class="hljs">' + markdown.utils.escapeHtml(str) + '</code></pre>';
    }
});

// Export
export default {
    props: {
        id: {
            type: String,
            required: false,
            default: 'markdown-renderer'
        },
        data: {
            type: String,
            required: false,
            default: null
        },
    },
    data() {
        return {
            content: {
                id: this.id + "_content",
                value: ''
            },
            ready: false
        }
    },
    methods: {

        render():any {
            if (this.data) {
                this.content.value = markdown.render(this.data);
            } else {
                const content = document.getElementById(this.content.id).innerText;
                if (content) { this.content.value = markdown.render(content); } else { this.content.value = ''; }
            }
            this.ready = true;
        }

    },

    mounted() {  this.render(); },
    watch: { data() { this.render(); } }

}

</script>

<template>
    <div :id="content.id" :ref="content.id" class="hidden" @input="render"><slot></slot></div>
    <div :id="id" :ref="id" :class="ready ? '' : 'hidden'" v-html="content.value" class="markdown-renderer"></div>
</template>