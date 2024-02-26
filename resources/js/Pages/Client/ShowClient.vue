<template>
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                        <h1 class="mt-8 text-2xl font-medium text-gray-900">
                            Welcome to your Jetstream application!
                        </h1>
                        <div class="text-black" v-for="client in clients" :key="client.Client_ID">
                            <h2>{{ client.Client_ID }}</h2>
                            <h2>{{ client.Client_Name }}</h2>
                            <p>{{ client.Client_Description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script setup>
import { defineProps } from 'vue';

defineProps({
    client: Object
})
</script>