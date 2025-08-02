<template>
  <router-view />
</template>

<script>
import me from 'src/func/mounted/me'
import lang from 'src/func/mounted/lang'

export default {
  async mounted() {
    // order of running functions matter
    await me();
    await lang();
  }
}
</script>
