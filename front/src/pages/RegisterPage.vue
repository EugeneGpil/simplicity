<template>
  <FullScreenFormWidget>
    <TitleComponent
      containerClass="full-screen-form__row"
      title="Register new account"
    />
    <RegisterNameInputFeature/>
    <RegisterEmailInputFeature/>
    <RegisterPasswordInputFeature/>
    <RegisterPasswordConfirmationFeature/>
    <RegisterRegisterButtonFeature/>
    <RegisterLoginButtonFeature/>
  </FullScreenFormWidget>
</template>

<script setup>
import TitleComponent from 'src/modules/auth/ui/shared/TitleComponent.vue';
import FullScreenFormWidget from 'src/modules/auth/ui/widgets/FullScreenFormWidget.vue';
import RegisterNameInputFeature from 'src/modules/auth/ui/features/RegisterNameInputFeature.vue'
import RegisterEmailInputFeature from 'src/modules/auth/ui/features/RegisterEmailInputFeature.vue'
import RegisterPasswordInputFeature from 'src/modules/auth/ui/features/RegisterPasswordInputFeature.vue'
import RegisterPasswordConfirmationFeature from 'src/modules/auth/ui/features/RegisterPasswordConfirmationFeature.vue'
import RegisterRegisterButtonFeature from 'src/modules/auth/ui/features/RegisterRegisterButtonFeature.vue'
import RegisterLoginButtonFeature from 'src/modules/auth/ui/features/RegisterLoginButtonFeature.vue'
</script>
