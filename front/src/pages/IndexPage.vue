<template>
  <header class="header">
    <div class="burger">
      <q-icon class="burger__icon" name="fa-solid fa-bars"/>
    </div>
  </header>
</template>

<style scoped lang="scss">
.header {
  height: 3.5rem;
  background-color: var(--color-main-background);
  padding: 1rem 1.5rem;
  border-bottom: 1px solid var(--color-border);
}

.burger {
  line-height: 1.5;

  &__icon {
    font-weight: 900;
    font-size: 1rem;
    color: var(--color-icon);
    cursor: pointer;

    &:hover {
      color: var(--color-icon-hover);
    }
  }
}
</style>
