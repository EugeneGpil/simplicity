<template>
  <router-view />
</template>

<script>
import me from 'src/func/me'

export default {
  async mounted() {
    me();
  }
}
</script>
