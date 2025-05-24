<template>
    <div class="grid grid-cols-12 gap-4 ">
        <Box class="col-span-12 md:col-span-7 flex items-center w-full">
            <div class="w-full text-center font-medium text-gray-500">
                No img
            </div>
        </Box>
        <div class="col-span-12 md:col-span-5 flex flex-col gap-4">
            <Box>
                <template #header>Basic Info</template>
                <ListingSpacing :listing="listing" />
            </Box>
            <Box>
                <template #header>Offer</template>
                Offer
            </Box>
        </div>

    </div>

</template>

<script setup>
import Box from '@/Component/UI/Box.vue';
import ListingSpacing from '../../Component/UI/ListingSpacing.vue';


defineProps({
    listing: Object,
});
</script><style>
@import "tailwindcss";
</style>
