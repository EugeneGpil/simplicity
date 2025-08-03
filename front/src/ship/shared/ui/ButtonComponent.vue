<template>
  <div :class="`button ${containerClass}`">
    {{ title }}
  </div>
</template>

<script>
export default {
  props: {
    containerClass: {
      type: String,
      default: '',
    },
    title: {
      type: String,
      required: true,
    },
  },
}
</script>
