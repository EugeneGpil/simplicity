<template>
  <div class="full-screen-form">
    <div class="full-screen-form__content">
      <FullScreenTitleComponent
        title="Sign in to start your session"
        containerClass="full-screen-form__row"
      />
      <div class="icon-input full-screen-form__row">
        <input class="icon-input__input" placeholder="Email">
        <div class="icon-input__icon-container">
          <i class="icon-input__icon fa-solid fa-envelope"/>
        </div>
      </div>
      <div class="icon-input full-screen-form__row">
        <input class="icon-input__input" placeholder="Password">
        <div class="icon-input__icon-container">
          <i class="icon-input__icon"/>
          <i class="icon-input__icon fa-solid fa-lock"/>
        </div>
      </div>
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
import FullScreenTitleComponent from 'src/shared/ui/FullScreenTitleComponent.vue'
</script>

<style scoped lang="scss">
.icon-input {
  display: flex;
  justify-content: center;
  align-items: center;
  border: solid var(--border-small) var(--color-border-secondary);
  border-radius: var(--border-radius-secondary);
  padding: 0;
  overflow: hidden;

  &__input {
    flex: 1;
    height: 100%;
    padding: var(--gap-tiny) var(--gap-small);
    border-radius: 0;
    border: none;
    border-right: solid 1px var(--color-border-secondary);
    background-color: var(--color-background-main);
    font-size: var(--text-usual);
    line-height: var(--line-height-usual);

    &::placeholder {
      color: var(--color-input-placeholder);
    }
  }

  &__icon-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: var(--gap-tiny) var(--gap-small);
    //padding: var(--gap-small);
    flex: 0.08;
    background-color: var(--color-background-secondary);
    align-self: stretch;
    color: var(--color-text-secondary);
  }

  &__icon {
    font-size: var(--gap-smaller);
  }
}

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
