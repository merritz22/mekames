<script setup>
import { defineProps } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';


defineProps({
    clients: Object,
    client: Object,
    index: Boolean
})
</script>

<template>
    <AppLayout title="Projets">

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div v-if="index" class="p-6 lg:p-8 bg-white border-b border-gray-200">
                        <ApplicationLogo class="block h-12 w-auto" />
                    <div class="p-2 m-3 rounded-lg text-yellow-50 w-fit bg-blue-900">
                        <Link href="/newClient">Create</Link>
                    </div>
                        <h1 class="mt-8 text-2xl font-medium text-gray-900">
                            Welcome to your Jetstream application!
                        </h1>
                        <div class="text-black" v-for="client in clients" :key="client.Client_ID">
                            <h2>{{ client.id }}</h2>
                            <h2>{{ client.Client_Name }}</h2>
                            <p>{{ client.Client_Description }}</p>
                            <Link :href="`/client/${client.id}`">More</Link>
                        </div>
                    </div>
                    <div v-else class="p-6 lg:p-8 bg-white border-b border-gray-200">
                        <ApplicationLogo class="block h-12 w-auto" />

                        <h1 class="mt-8 text-2xl font-medium text-gray-900">
                            Show f Welcome to your Jetstream application!
                        </h1>
                        <div class="text-black">
                            <h2>{{ client.id }}</h2>
                            <h2>{{ client.Client_Name }}</h2>
                            <p>{{ client.Client_Description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
