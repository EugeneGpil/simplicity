<template>
  <div class="additional-button">
    {{ title }}
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true,
    },
  },
}
</script>

<style scoped lang="scss">
.additional-button {
  color: var(--color-text-action);
  cursor: pointer;

  &:hover {
    color: var(--color-text-action-hover);
  }
}
</style>
