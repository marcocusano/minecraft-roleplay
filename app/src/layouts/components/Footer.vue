<template>
  <div class="h-100 d-flex align-center justify-space-between">
    <!-- 👉 Footer: left content -->
    <span class="d-flex align-center">
      &copy;
      {{ new Date().getFullYear() }}
      Built With
      <VIcon
        icon="mdi-heart-outline"
        color="error"
        size="1.25rem"
        class="mx-1"
      />
      By <a
        href="https://www.marcocusano.dev"
        target="_blank"
        rel="noopener noreferrer"
        class="text-primary ms-1"
      >Marco Cusano</a>
    </span>
    <!-- 👉 Footer: right content -->
    <span class="d-md-flex gap-x-4 text-primary d-none">
      <a
        href="https://github.com/marcocusano/minecraft-roleplay/blob/main/LICENSE"
        target="_blank"
      >License</a>
      <a
        href="https://themeforest.net/item/materialize-material-design-admin-template/11446068"
        target="_blank"
      >Buy this Theme</a>
      <a
        href="https://github.com/marcocusano/minecraft-roleplay"
        target="_blank"
      >Documentation</a>
    </span>
  </div>
</template>
