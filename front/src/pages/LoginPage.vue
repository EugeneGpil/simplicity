<template>
  <div class="full-screen-form">
    <div class="full-screen-form__content">
      <div class="form-title full-screen-form__row">
        Sign in to start your session
      </div>
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
}

.form-title {
  width: 100%;
  text-align: center;
  font-size: var(--font-size-h3);
  line-height: var(--font-size-h3);
  color: var(--color-text-main);
}

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
<script setup lang="ts">
</script>
