<template>
  <div :class="`form-title ${containerClass}`">
    {{ title}}
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true,
    },
    containerClass: {
      type: String,
      default: '',
    },
  },
}
</script>

<style lang="scss" scoped>
.form-title {
  width: 100%;
  text-align: center;
  font-size: var(--font-size-h3);
  line-height: var(--font-size-h3);
  color: var(--color-text-main);
}
</style>
