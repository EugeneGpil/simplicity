<template>
  <IconInputComponent
    v-model="loginStore.password"
    placeholder="Password"
    containerClass="full-screen-form__row"
    type="password"
    icon="fa-solid fa-lock"
  />
</template>

<script setup>
import IconInputComponent from "src/modules/auth/ui/shared/IconInputComponent.vue";
import {useLoginStore} from 'src/modules/auth/models/login.js'

const loginStore = useLoginStore()
</script>
