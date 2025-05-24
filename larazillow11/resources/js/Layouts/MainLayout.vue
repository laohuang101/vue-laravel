<template>
    <div>
        <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full">
            <div class="container mx-auto">
                <nav class="p-4 flex item-center justify-between">
                    
                    <div class="text-lg font-medium">
                        <Link href="/hello">Show Page</Link>
                    </div>
                    <div class="text-xl text-indigo-600 dark:text-indigo-600 font-bold text-center">
                        <Link href="/">Main Page</Link>
                    </div>
                    <div class="text-lg font-medium">
                        <Link href="/listing">Listing</Link>
                    </div>
                </nav>
            </div>
        </header>

        <main class="container mx-auto p-4  ">
            <div v-if="success" class="md-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2 mb-2">
                {{ success }}
            </div>
            
            <slot>Default</slot>
        </main>

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