<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { defineProps } from 'vue';

defineProps({
    clients: Object
})
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <ApplicationLogo class="block h-12 w-auto" />

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                Welcome to your Jetstream application!
            </h1>
            <div v-for="client in clients" :key="client.Client_ID">
                <h2>{{ client.Client_Name }}</h2>
                <p>{{ client.Client_Description }}</p>
                <p>helloooooooo</p>
            </div>
        </div>
    </div>
</template>
