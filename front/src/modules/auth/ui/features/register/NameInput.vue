<template>
  <IconInput
    v-model="registerStore.name"
    containerClass="full-screen-form__row"
    icon="fas fa-user"
    placeholder="Full name"
    type="text"
  />
</template>

<script setup>
import IconInput from "src/modules/auth/ui/shared/IconInput.vue";
import {useRegisterStore} from 'src/modules/auth/models/register.js'

const registerStore = useRegisterStore()
</script>
