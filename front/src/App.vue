<template>
  <router-view />
</template>

<script>
import me from 'src/func/mounted/me'
import lang from 'src/func/mounted/lang'

export default {
  async mounted() {
    // order of running functions matter
    const steps = [
      me,
      lang,
    ]

    for (const step of steps) {
      try {
        await step()
      } catch (e) {
        console.error(e)
      }
    }

    await lang()
  }
}
</script>
