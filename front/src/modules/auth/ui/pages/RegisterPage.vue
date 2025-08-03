<template>
  <FullScreenForm>
    <TitleComponent
      containerClass="full-screen-form__row"
      title="Register new account"
    />
    <NameInput/>
    <EmailInput/>
    <PasswordInput/>
    <PasswordConfirmationInput/>
    <RegisterButton/>
    <LoginButton/>
  </FullScreenForm>
</template>

<script setup>
import TitleComponent from 'src/modules/auth/ui/shared/TitleComponent.vue';
import FullScreenForm from 'src/modules/auth/ui/widgets/FullScreenForm.vue';
import NameInput from 'src/modules/auth/ui/features/register/NameInput.vue'
import EmailInput from 'src/modules/auth/ui/features/register/EmailInput.vue'
import PasswordInput from 'src/modules/auth/ui/features/register/PasswordInput.vue'
import PasswordConfirmationInput from 'src/modules/auth/ui/features/register/PasswordConfirmationInput.vue'
import RegisterButton from 'src/modules/auth/ui/features/register/RegisterButton.vue'
import LoginButton from 'src/modules/auth/ui/features/register/LoginButton.vue'
</script>
