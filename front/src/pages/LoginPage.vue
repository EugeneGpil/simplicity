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
      <div class="full-screen-form__small-button button">
        Sign in
      </div>
      <div class="full-screen-form__additional-button">
        Register a new membership
      </div>
    </div>
  </div>
</template>

<script setup>
import IconInputComponent from 'src/features/auth/ui/IconInputComponent.vue'
import TitleComponent from 'src/features/auth/ui/TitleComponent.vue'
</script>

<style scoped lang="scss">
.full-screen-form {
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
