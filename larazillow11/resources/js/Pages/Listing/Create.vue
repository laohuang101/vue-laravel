<template>
    <form @submit.prevent="create">
      <div>
        <div>
          <label>Beds</label>
          <input v-model.number="form.beds" type="text" />
          <div v-if="form.errors.beds" style="color:red">{{ form.errors.beds }}</div>
        </div>
  
        <div>
          <label>Baths</label>
          <input v-model.number="form.baths" type="text" />
          <div v-if="form.errors.baths" style="color:red">{{ form.errors.baths }}</div>
        </div>
  
        <div>
          <label>Area</label>
          <input v-model.number="form.area" type="text" />
          <div v-if="form.errors.area" style="color:red">{{ form.errors.area }}</div>
        </div>
  
        <div>
          <label>City</label>
          <input v-model="form.city" type="text" />
          <div v-if="form.errors.city" style="color:red">{{ form.errors.city }}</div>
        </div>
  
        <div>
          <label>Post Code</label>
          <input v-model="form.code" type="text" />
          <div v-if="form.errors.code" style="color:red">{{ form.errors.code }}</div>
        </div>
  
        <div>
          <label>Street</label>
          <input v-model="form.street" type="text" />
          <div v-if="form.errors.street" style="color:red">{{ form.errors.street }}</div>
        </div>
  
        <div>
          <label>Street Nr</label>
          <input v-model.number="form.street_nr" type="text" />
          <div v-if="form.errors.street_nr" style="color:red">{{ form.errors.street_nr }}</div>
        </div>
  
        <div>
          <label>Price</label>
          <input v-model.number="form.price" type="text" />
          <div v-if="form.errors.price" style="color:red">{{ form.errors.price }}</div>
        </div>
  
        <div>
          <button type="submit" :disabled="form.processing">Create</button>
        </div>
      </div>
    </form>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  
  const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    city: null,
    street: null,
    code: null,
    street_nr: null,
    price: 0,
  })
  
  const create = () => {
    form.post('/listing')
  }
  </script>
  
  <style scoped>
@import "tailwindcss"; 
  label {
    margin-right: 2em;
  }
  
  div {
    padding: 2px
  }
  </style>