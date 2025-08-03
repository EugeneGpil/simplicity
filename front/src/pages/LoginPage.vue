<template>
  <FullScreenFormWidget>
    <TitleComponent
      title="Sign in"
      containerClass="full-screen-form__row"
    />
    <LoginEmailInputFeature/>
    <LoginPasswordInputFeature/>
    <LoginSignInButtonFeature/>
    <LoginRegisterButtonFeature/>
  </FullScreenFormWidget>
</template>

<script setup>
import LoginEmailInputFeature from 'src/modules/auth/ui/features/LoginEmailInputFeature.vue';
import LoginPasswordInputFeature from 'src/modules/auth/ui/features/LoginPasswordInputFeature.vue';
import LoginRegisterButtonFeature from 'src/modules/auth/ui/features/LoginRegisterButtonFeature.vue';
import LoginSignInButtonFeature from 'src/modules/auth/ui/features/LoginSignInButtonFeature.vue';
import TitleComponent from 'src/modules/auth/ui/shared/TitleComponent.vue';
import FullScreenFormWidget from 'src/modules/auth/ui/widgets/FullScreenFormWidget.vue';
</script>
