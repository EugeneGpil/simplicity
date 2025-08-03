<template>
  <IconInput
    v-model="registerStore.password"
    placeholder="Password"
    containerClass="full-screen-form__row"
    type="password"
    icon="fa-solid fa-lock"
  />
</template>

<script setup>
import IconInput from "src/modules/auth/ui/shared/IconInput.vue";
import {useRegisterStore} from 'src/modules/auth/models/register.js'

const registerStore = useRegisterStore()
</script>
