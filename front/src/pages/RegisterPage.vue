<template>
  <FullScreenFormWidget>
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
  </FullScreenFormWidget>
</template>

<script setup>
import ROUTE_NAMES from 'src/ship/consts/route-names.js';
import AdditionalButton from 'src/modules/auth/ui/shared/AdditionalButton.vue';
import TitleComponent from 'src/modules/auth/ui/shared/TitleComponent.vue';
import IconInputComponent from 'src/modules/auth/ui/shared/IconInputComponent.vue';
import ButtonComponent from 'src/ship/shared/ui/ButtonComponent.vue';
import FullScreenFormWidget from 'src/modules/auth/ui/widgets/FullScreenFormWidget.vue';
</script>
