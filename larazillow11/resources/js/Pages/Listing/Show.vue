<template>
    <div>
        <ListingAddress :listing="listing" />
    </div>
</template>

<script setup>

import ListingAddress from '../../Component/ListingAddress.vue';


defineProps({
    listing: Object,
});
</script>