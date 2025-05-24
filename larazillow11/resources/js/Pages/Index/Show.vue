<template>
    <h1><b>Show</b></h1>
    <div>Page up time: {{ timer }}</div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

import { ref } from 'vue';

const timer = ref(0);
setInterval(() => timer.value++, 1000);
</script>

<script lang="ts">
import MainLayout from '@/Layouts/MainLayout.vue';
export default {
    layout: MainLayout
}
</script>
<style>
@import "tailwindcss";
</style>
