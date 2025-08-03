<template>
  <IconInputComponent
    v-model="loginStore.email"
    containerClass="full-screen-form__row"
    icon="fa-solid fa-envelope"
    placeholder="Email"
    type="email"
  />
</template>

<script setup>
import IconInputComponent from "src/modules/auth/ui/shared/IconInputComponent.vue";
import {useLoginStore} from 'src/modules/auth/models/login.js'

const loginStore = useLoginStore()
</script>
