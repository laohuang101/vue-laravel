<template>
    <form @submit.prevent="update" class="max-w-2xl mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="col-span-2">
                <h1 class="text-2xl font-bold mb-6">Edit Listing</h1>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Beds</label>
                <input 
                    v-model.number="form.beds" 
                    type="text" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
                <div v-if="form.errors.beds" class="text-red-500 text-sm">{{ form.errors.beds }}</div>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Baths</label>
                <input 
                    v-model.number="form.baths" 
                    type="text" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
                <div v-if="form.errors.baths" class="text-red-500 text-sm">{{ form.errors.baths }}</div>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Area</label>
                <input 
                    v-model.number="form.area" 
                    type="text" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
                <div v-if="form.errors.area" class="text-red-500 text-sm">{{ form.errors.area }}</div>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">City</label>
                <input 
                    v-model="form.city" 
                    type="text" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
                <div v-if="form.errors.city" class="text-red-500 text-sm">{{ form.errors.city }}</div>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Post Code</label>
                <input 
                    v-model="form.code" 
                    type="text" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
                <div v-if="form.errors.code" class="text-red-500 text-sm">{{ form.errors.code }}</div>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Street</label>
                <input 
                    v-model="form.street" 
                    type="text" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
                <div v-if="form.errors.street" class="text-red-500 text-sm">{{ form.errors.street }}</div>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Street Nr</label>
                <input 
                    v-model.number="form.street_nr" 
                    type="text" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
                <div v-if="form.errors.street_nr" class="text-red-500 text-sm">{{ form.errors.street_nr }}</div>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Price</label>
                <input 
                    v-model.number="form.price" 
                    type="text" 
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
                <div v-if="form.errors.price" class="text-red-500 text-sm">{{ form.errors.price }}</div>
            </div>

            <div class="col-span-2 mt-6">
                <button 
                    type="submit" 
                    :disabled="form.processing"
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50"
                >
                    Update Listing
                </button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    listing: {
        type: Object,
        required: true
    }
})

const form = useForm({
    beds: props.listing.beds,
    baths: props.listing.baths,
    area: props.listing.area,
    city: props.listing.city,
    street: props.listing.street,
    code: props.listing.code,
    street_nr: props.listing.street_nr,
    price: props.listing.price,
})

const update = () => {
    form.put(`/listing/${props.listing.id}`)
}
</script>

<style scoped>
@import "tailwindcss";
</style>