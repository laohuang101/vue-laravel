<template>
  <div>
    <Link :href="`/listing/create`" class="btn">Create New Listing</Link>

    <div v-for="listing in listings" :key="listing.id" class="listing-item">
      <Link :href="`/listing/${listing.id}`">
        <ListingAddress :listing="listing" />
      </Link>
      <Link :href="`/listing/${listing.id}/edit`" class="edit-link">Edit</Link>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ListingAddress from '../../Component/ListingAddress.vue';

defineProps({
  listings: Array,
});
</script>

<style scoped>
.listing-item {
  margin: 10px 0;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

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