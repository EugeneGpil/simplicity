<template>
  <IconInput
    v-model="loginStore.password"
    placeholder="Password"
    containerClass="full-screen-form__row"
    type="password"
    icon="fa-solid fa-lock"
  />
</template>

<script setup>
import IconInput from "src/modules/auth/ui/shared/IconInput.vue";
import {useLoginStore} from 'src/modules/auth/models/login.js'

const loginStore = useLoginStore()
</script>
