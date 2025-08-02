<template>
  <header class="header">
    <div class="burger">
      <q-icon class="burger__icon" name="fa-solid fa-bars"/>
    </div>
  </header>
</template>

<style scoped lang="scss">
.header {
  height: var(--height-header);
  background-color: var(--color-background-main);
  padding: var(--gap-small) var(--gap-bigger);
  border-bottom: var(--border-small) solid var(--color-border);
}

.burger {
  line-height: 1.5;

  &__icon {
    font-weight: 900;
    font-size: var(--text-usual);
    color: var(--color-icon);
    cursor: pointer;

    &:hover {
      color: var(--color-icon-hover);
    }
  }
}
</style>
