<script lang="ts">
// Export
import { defineComponent } from 'vue';
export default defineComponent({
    props: {
        modelValue: {
            type: String,
            required: false,
            default: null
        }
    },
    data() {
        return {
            apiKey: import.meta.env['VITE_EDITOR_TINYMCE']
        }
    }
});

</script>

<template>
    <TinyMCE :apiKey="apiKey" :init="{
        height: 500,
        menubar: false,
        plugins: [
            'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
            'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
            'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar:
            'undo redo | casechange blocks | bold italic backcolor | \
        alignleft aligncenter alignright alignjustify | \
        bullist numlst checklist outdent indent | removeformat | a11ycheck code table help'
    }" :model-value="modelValue"></TinyMCE>
</template>