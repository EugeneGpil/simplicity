<template>
  <div :class="`icon-input ${containerClass}`">
    <input class="icon-input__input" :placeholder="placeholder" :type="type">
    <div class="icon-input__icon-container">
      <i :class="`icon-input__icon ${icon}`"/>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    containerClass: {
      type: String,
      default: '',
    },
    placeholder: {
      type: String,
      required: true,
    },
    type: {
      type: String,
      default: 'text',
    },
    icon: {
      type: String,
      required: true,
    }
  },
}
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
    flex: 0.08;
    background-color: var(--color-background-secondary);
    align-self: stretch;
    color: var(--color-text-secondary);
  }

  &__icon {
    font-size: var(--gap-smaller);
  }
}
</style>
