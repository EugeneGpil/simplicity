<template>
  <div class="full-screen-form">
    <div class="full-screen-form__content">
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
      <div class="full-screen-form__additional-button">
        Register a new membership
      </div>
    </div>
  </div>
</template>

<script setup>
import IconInputComponent from 'src/features/auth/ui/IconInputComponent.vue'
import TitleComponent from 'src/features/auth/ui/TitleComponent.vue'
import ButtonComponent from 'src/shared/ui/ButtonComponent.vue';
</script>

<style scoped lang="scss">
.full-screen-form {
  width: 100wh;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--color-background-secondary);

  &__content {
    width: 90vw;
    max-width: var(--width-full-screen-form);
    padding: var(--gap-usual);
    background-color: var(--color-background-main);
    border-top: var(--border-medium) solid var(--color-action);
    display: flex;
    flex-direction: column;
    border-radius: var(--border-radius-secondary);
  }

  &__row {
    margin-bottom: var(--gap-smaller);

    &:last-child {
      margin-bottom: 0;
    }
  }

  &__small-button {
    align-self: flex-end;
    margin-bottom: var(--gap-smaller);
  }

  &__additional-button {
    color: var(--color-text-action);
    cursor: pointer;

    &:hover {
      color: var(--color-text-action-hover);
    }
  }
}
</style>
