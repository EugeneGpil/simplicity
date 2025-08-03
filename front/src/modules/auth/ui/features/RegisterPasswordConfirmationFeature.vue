<template>
  <IconInputComponent
    v-model="registerStore.passwordConfirmation"
    placeholder="Retype password"
    containerClass="full-screen-form__row"
    type="password"
    icon="fa-solid fa-lock"
  />
</template>

<script setup>
import IconInputComponent from "src/modules/auth/ui/shared/IconInputComponent.vue";
import {useRegisterStore} from 'src/modules/auth/models/register.js'

const registerStore = useRegisterStore()
</script>
