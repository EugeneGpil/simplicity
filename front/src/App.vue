<template>
  <router-view />
</template>

<script>
import user from 'src/api/user'

export default {
  async mounted() {
    const me = await user.me()
    console.log('me', me)
  }
}
</script>
