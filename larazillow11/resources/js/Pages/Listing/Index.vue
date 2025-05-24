<template>
  <div class="flex">
    <Link :href="`/listing/create`" class="btn ml-auto">+ Create New Listing</Link>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <Box v-for="listing in listings" :key="listing.id">
      <Link :href="`/listing/${listing.id}`">
        <ListingAddress :listing="listing" />
      </Link>
      <Link :href="`/listing/${listing.id}/edit`" class="edit-link" as="button">Edit</Link>
      <Link :href="`/listing/${listing.id}`" method="DELETE" class="edit-link" as="button">Delete</Link>
    </Box>
  </div>
  
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ListingAddress from '@/Component/ListingAddress.vue';
import Box from '@/Component/UI/Box.vue'

defineProps({
  listings: Array,
});
</script>

<style scoped>
@import "tailwindcss";
.btn {
  display: inline-block;
  padding: 8px 16px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 4px;
  margin-bottom: 20px;
}

.edit-link {
  margin-left: 10px;
  color: #2196F3;
  text-decoration: none;
}

.edit-link:hover {
  text-decoration: underline;
}
</style>