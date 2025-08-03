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
    />
    <AdditionalButton
        title="Register a new membership"
        @click="$router.push({name: ROUTE_NAMES.REGISTER})"
    />
  </FullScreenForm>
</template>

<script setup>
import AdditionalButton from 'src/modules/auth/ui/shared/AdditionalButton.vue';
import IconInputComponent from 'src/modules/auth/ui/shared/IconInputComponent.vue';
import TitleComponent from 'src/modules/auth/ui/shared/TitleComponent.vue';
import ButtonComponent from 'src/ship/shared/ui/ButtonComponent.vue';
import FullScreenForm from 'src/widgets/FullScreenForm.vue';

import ROUTE_NAMES from 'src/consts/route-names';
</script>
