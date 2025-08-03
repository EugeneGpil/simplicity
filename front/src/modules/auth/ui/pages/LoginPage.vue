<template>
  <FullScreenForm>
    <TitleComponent
      title="Sign in"
      containerClass="full-screen-form__row"
    />
    <LoginEmailInput/>
    <LoginPasswordInput/>
    <LoginSignInButton/>
    <LoginRegisterButton/>
  </FullScreenForm>
</template>

<script setup>
import LoginEmailInput from 'src/modules/auth/ui/features/login/LoginEmailInput.vue';
import LoginPasswordInput from 'src/modules/auth/ui/features/login/LoginPasswordInput.vue';
import LoginRegisterButton from 'src/modules/auth/ui/features/login/LoginRegisterButton.vue';
import LoginSignInButton from 'src/modules/auth/ui/features/login/LoginSignInButton.vue';
import TitleComponent from 'src/modules/auth/ui/shared/TitleComponent.vue';
import FullScreenForm from 'src/modules/auth/ui/widgets/FullScreenForm.vue';
</script>
