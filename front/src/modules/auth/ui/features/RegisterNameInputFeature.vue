<template>
  <IconInputComponent
    v-model="registerStore.name"
    containerClass="full-screen-form__row"
    icon="fas fa-user"
    placeholder="Full name"
    type="text"
  />
</template>

<script setup>
import IconInputComponent from "src/modules/auth/ui/shared/IconInputComponent.vue";
import {useRegisterStore} from 'src/modules/auth/models/register.js'

const registerStore = useRegisterStore()
</script>
