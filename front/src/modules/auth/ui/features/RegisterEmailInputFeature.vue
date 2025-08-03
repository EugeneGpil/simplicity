<template>
  <IconInputComponent
    v-model="registerStore.email"
    placeholder="Email"
    containerClass="full-screen-form__row"
    type="email"
    icon="fa-solid fa-envelope"
  />
</template>

<script setup>
import IconInputComponent from "src/modules/auth/ui/shared/IconInputComponent.vue";
import {useRegisterStore} from 'src/modules/auth/models/register'

const registerStore = useRegisterStore();
</script>
