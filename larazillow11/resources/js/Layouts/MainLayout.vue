<template>
    <div>
        <Link href="/">Index</Link> &nbsp;
        <Link href="/hello">Show</Link>
        <slot></slot>
    </div>
</template>

<script setup lang="ts">
 import { Link } from '@inertiajs/vue3';
</script>
