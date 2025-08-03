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
  </FullScreenForm>
</template>

<script setup>
import TitleComponent from "src/features/auth/ui/TitleComponent.vue";
import IconInputComponent from "src/features/auth/ui/IconInputComponent.vue";
import FullScreenForm from 'src/widgets/FullScreenForm.vue';
</script>
