<template>
    <h1><b>Index</b></h1>
    <p>{{ messages }}</p>
</template>

<script setup lang="ts">

    defineProps({
        messages: String
    });
</script>