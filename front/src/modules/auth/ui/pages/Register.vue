<template>
  <FullScreenForm>
    <Title
      containerClass="full-screen-form__row"
      title="Register new account"
    />
    <RegisterNameInput/>
    <RegisterEmailInput/>
    <RegisterPasswordInput/>
    <RegisterPasswordConfirmation/>
    <RegisterRegisterButton/>
    <RegisterLoginButton/>
  </FullScreenForm>
</template>

<script setup>
import Title from 'src/modules/auth/ui/shared/Title.vue';
import FullScreenForm from 'src/modules/auth/ui/widgets/FullScreenForm.vue';
import RegisterNameInput from 'src/modules/auth/ui/features/register/RegisterNameInput.vue'
import RegisterEmailInput from 'src/modules/auth/ui/features/register/RegisterEmailInput.vue'
import RegisterPasswordInput from 'src/modules/auth/ui/features/register/RegisterPasswordInput.vue'
import RegisterPasswordConfirmation from 'src/modules/auth/ui/features/register/RegisterPasswordConfirmation.vue'
import RegisterRegisterButton from 'src/modules/auth/ui/features/register/RegisterRegisterButton.vue'
import RegisterLoginButton from 'src/modules/auth/ui/features/register/RegisterLoginButton.vue'
</script>
