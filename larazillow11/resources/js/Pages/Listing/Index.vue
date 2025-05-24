<template>
  <Link :href="`/listing/index`">Listing Index</Link>

  <div v-for="listing in listings" :key="listing.id">
    <Link :href="`/listing/${listing.id}`">
    <ListingAddress :listing="listing" />
    </Link>
  </div>
</template>

<script setup>
import { createInertiaApp } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'
import ListingAddress from '../../Component/ListingAddress.vue';

defineProps({
  listings: Array,
});
</script>