<template>
  <AdditionalButton
    title="Register new account"
    @click="$router.push({name: ROUTE_NAMES.REGISTER})"
  />
</template>

<script setup>
import AdditionalButton from "src/modules/auth/ui/shared/AdditionalButton.vue";

import ROUTE_NAMES from 'src/ship/consts/route-names'
</script>
