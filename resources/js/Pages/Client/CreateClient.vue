<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {useForm} from '@inertiajs/vue3';

const form = useForm({
    'Client_State_ID' : null,
    'Client_Name' : '',
    'Client_Description' : '',
    'Client_Location' : '',
    'Client_Phone' : '',
    'Client_InscriptionDate' : null,
    'Client_SpendedMoney': 100
})
</script>

<template>
    <AppLayout title="Projets">

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="form.post('/createClient')">
                        <div>
                            <label>Client Name</label>
                            <input type="text" v-model="form.Client_Name">
                        </div>
                        <div>
                            <label>Client Location</label>
                            <input type="text" v-model="form.Client_Location">
                        </div>
                        <div>
                            <label>Client Phone</label>
                            <input type="text" v-model="form.Client_Phone">
                        </div>
                        <div>
                            <label>Client Description</label>
                            <textarea type="text" v-model="form.Client_Description"></textarea>
                        </div>
                        <div>
                            <label>Client Spended Money</label>
                            <input type="number" v-model="form.Client_SpendedMoney">
                        </div>
                        <div>
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
