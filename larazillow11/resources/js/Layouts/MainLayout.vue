<template>
    <div>
        <Link href="/">Main Page</Link> &nbsp;
        <Link href="/hello">Show Page</Link> &nbsp;
        <Link href="/listing">Index Page</Link> &nbsp;
        <Link href="/listing/create">Create Page</Link> &nbsp;
        <Link href="/listing/update">Update Page</Link>
        <br><br>

        <div v-if="success" class="success">
            {{ success }}
        </div>

        <slot>Default</slot>
    </div>
</template>

<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue';

const page = usePage()
const success = computed(() => page.props.flash?.success)
</script>

<style scoped>
.success {
    background: green;
    color: white;
}
</style>