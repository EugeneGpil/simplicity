<template>
  <IconInput
    v-model="registerStore.email"
    placeholder="Email"
    containerClass="full-screen-form__row"
    type="email"
    icon="fa-solid fa-envelope"
  />
</template>

<script setup>
import IconInput from "src/modules/auth/ui/shared/IconInput.vue";
import {useRegisterStore} from 'src/modules/auth/models/register.js'

const registerStore = useRegisterStore();
</script>
