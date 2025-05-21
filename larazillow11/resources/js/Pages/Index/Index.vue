<template>
    <MainLayout>
        <h1><b>Index</b></h1>
        <p>{{ messages }}</p>
    </MainLayout>
</template>

<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
    import MainLayout from '@/Layouts/MainLayout.vue';
    defineProps({
        messages: String
    });
</script>