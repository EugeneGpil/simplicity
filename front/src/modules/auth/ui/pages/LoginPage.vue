<template>
  <FullScreenForm>
    <TitleComponent
      title="Sign in"
      containerClass="full-screen-form__row"
    />
    <EmailInput/>
    <PasswordInput/>
    <SignInButton/>
    <RegisterButton/>
  </FullScreenForm>
</template>

<script setup>
import EmailInput from 'src/modules/auth/ui/features/login/EmailInput.vue';
import PasswordInput from 'src/modules/auth/ui/features/login/PasswordInput.vue';
import RegisterButton from 'src/modules/auth/ui/features/login/RegisterButton.vue';
import SignInButton from 'src/modules/auth/ui/features/login/SignInButton.vue';
import TitleComponent from 'src/modules/auth/ui/shared/TitleComponent.vue';
import FullScreenForm from 'src/modules/auth/ui/widgets/FullScreenForm.vue';
</script>
