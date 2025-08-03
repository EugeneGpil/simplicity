<template>
  <FullScreenForm>
    <TitleComponent
      title="Register a new membership"
      containerClass="full-screen-form__row"
    />
    <IconInputComponent
      placeholder="Full name"
      containerClass="full-screen-form__row"
      type="text"
      icon="fas fa-user"
    />
    <IconInputComponent
      placeholder="Email"
      containerClass="full-screen-form__row"
      type="email"
      icon="fa-solid fa-envelope"
    />
    <IconInputComponent
      placeholder="Password"
      containerClass="full-screen-form__row"
      type="password"
      icon="fa-solid fa-lock"
    />
    <IconInputComponent
      placeholder="Retype password"
      containerClass="full-screen-form__row"
      type="password"
      icon="fa-solid fa-lock"
    />
    <ButtonComponent
      title="Register"
      containerClass="full-screen-form__small-button"
    />
    <AdditionalButton
      title="I already have an account"
      @click="$router.push({name: ROUTE_NAMES.LOGIN})"
    />
  </FullScreenForm>
</template>

<script setup>
import ROUTE_NAMES from 'src/consts/route-names.js';
import AdditionalButton from 'src/features/auth/ui/AdditionalButton.vue';
import TitleComponent from 'src/features/auth/ui/TitleComponent.vue';
import IconInputComponent from 'src/features/auth/ui/IconInputComponent.vue';
import ButtonComponent from 'src/shared/ui/ButtonComponent.vue';
import FullScreenForm from 'src/widgets/FullScreenForm.vue';
</script>
