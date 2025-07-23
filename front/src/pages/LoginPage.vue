<template>
  <div class="full-screen-form">
    <div class="full-screen-form__content">
      <div class="form-title">
        Sign in to start your session
      </div>
      <div class="full-screen-form__input icon-input">
        <input class="icon-input__input" placeholder="Email">
        <div class="icon-input__icon-container">
          <i class="icon-input__icon fa-solid fa-envelope"/>
        </div>
      </div>
      <div class="full-screen-form__input icon-input">
        <input class="icon-input__input" placeholder="Password">
        <div class="icon-input__icon-container">
          <i class="icon-input__icon"/>
          <i class="icon-input__icon fa-solid fa-lock"/>
        </div>
      </div>
      <div class="full-screnn-form__small-button button">
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

  &__content {
    width: 90vw;
    max-width: var(--width-full-screen-form);
    padding: var(--gap-usual);
  }
}

.form-title {
  width: 100%;
  text-align: center;
  font-size: var(--font-size-h3);
  line-height: var(--font-size-h3);
}

.icon-input {
  display: flex;
  justify-content: center;
  align-items: center;

  &__input {
    width: 100%;
    height: 100%;
    padding: var(--gap-tiny) var(--gap-small);
  }

  &__icon-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: var(--gap-tiny) var(--gap-small);
    //padding: var(--gap-small);
  }

  &__icon {
    font-size: var(--gap-smaller);
    line-height: 1.5;
  }
}
</style>
<script setup lang="ts">
</script>
