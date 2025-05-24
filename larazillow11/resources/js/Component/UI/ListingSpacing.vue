<template>
    <div class="space-y-1 text-sm">
      <div class="flex justify-between">
        <span class="font-medium">Beds:</span>
        <span>{{ listing.beds }}</span>
      </div>
      <div class="flex justify-between">
        <span class="font-medium">Baths:</span>
        <span>{{ listing.baths }}</span>
      </div>
      <div class="flex justify-between">
        <span class="font-medium">Area:</span>
        <span>{{ listing.area }} m²</span>
      </div>
      <div class="flex justify-between">
        <span class="font-medium">Street:</span>
        <span>{{ listing.street }}</span>
      </div>
      <div class="flex justify-between">
        <span class="font-medium">Street No.:</span>
        <span>{{ listing.street_nr }}</span>
      </div>
      <div class="flex justify-between">
        <span class="font-medium">City:</span>
        <span>{{ listing.city }}</span>
      </div>
      <div class="flex justify-between">
        <span class="font-medium">Price:</span>
        <span><Price :price="listing.price" class="text-2xl font-bold" /></span>
      </div>
    </div>
  </template>
  
<script setup>
import Price from '../Price.vue';

defineProps({
    listing: Object,
});
</script>