<template>
  <AdditionalButton
    title="I already have an account"
    @click="$router.push({name: ROUTE_NAMES.LOGIN})"
  />
</template>

<script setup>
import AdditionalButton from "src/modules/auth/ui/shared/AdditionalButton.vue";

import ROUTE_NAMES from 'src/ship/consts/route-names'
</script>
