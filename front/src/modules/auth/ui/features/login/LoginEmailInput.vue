<template>
  <IconInput
    v-model="loginStore.email"
    containerClass="full-screen-form__row"
    icon="fa-solid fa-envelope"
    placeholder="Email"
    type="email"
  />
</template>

<script setup>
import IconInput from "src/modules/auth/ui/shared/IconInput.vue";
import {useLoginStore} from 'src/modules/auth/models/login.js'

const loginStore = useLoginStore()
</script>
