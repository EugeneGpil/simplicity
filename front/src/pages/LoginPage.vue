<template>
  <FullScreenForm>
    <TitleComponent
        title="Sign in to start your session"
        containerClass="full-screen-form__row"
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
    <ButtonComponent
        title="Sign in"
        containerClass="full-screen-form__small-button"
        @click="$router.push({name: ROUTE_NAMES.REGISTER})"
    />
    <AdditionalButton title="Register a new membership" />
  </FullScreenForm>
</template>

<script setup>
import AdditionalButton from 'src/features/auth/ui/AdditionalButton.vue';
import IconInputComponent from 'src/features/auth/ui/IconInputComponent.vue';
import TitleComponent from 'src/features/auth/ui/TitleComponent.vue';
import ButtonComponent from 'src/shared/ui/ButtonComponent.vue';
import FullScreenForm from 'src/widgets/FullScreenForm.vue';

import ROUTE_NAMES from 'src/consts/route-names'
</script>
