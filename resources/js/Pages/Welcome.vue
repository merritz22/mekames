<script setup>
import { Head, Link } from '@inertiajs/vue3';
import LanguageSelector from '@/Shared/LanguageSelector.vue';
import coding from '@/assets/videos/coding.mp4';
import logo from '@/assets/images/Mekames-logo.png';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="relative sm:flex sm:justify-center sm:items-center h-full bg-dots-darker bg-center bg-gray-900 selection:bg-red-500 selection:text-white">
        
        <section class="hero" id="hero">
            <div v-if="canLogin" class="absolute text-center z-10 w-full h-screen top-10 sm:top-1/4">
                <div class="w-full mb-2">
                    <img class="rounded-full w-40 m-auto" :src=logo alt="Missing image">
                </div>
                <!-- <LanguageSelector/> -->
                <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Accueil</Link>
    
                <template v-else>
                    <Link :href="route('login')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Connexion</Link>
    
                    <Link v-if="canRegister" :href="route('register')" class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">S'enregistrer</Link>
                </template>
                <h1 class="font-bold text-lg mt-5">
                    Bienvenue chez <b class="text-red-500">mekames.com</b>
                </h1>
                <div class="m-auto w-10/12 text-justify mt-5">
                    <div>
                        <b class="text-red-500">Mekames</b> est une société dédiée à accompagner les entreprises dans leur parcours vers le succès numérique. Forts d'une expertise solide et d'une passion pour l'innovation, nous travaillons en étroite collaboration avec nos clients pour les aider à atteindre leurs objectifs commerciaux et à s'imposer efficacement dans le monde numérique en constante évolution.
                        Notre mission est claire, transformer les défis en opportunités et les objectifs en réalisations tangibles. Nous comprenons que dans le paysage actuel, la transition vers le numérique est essentielle pour la croissance et la pérennité des entreprises. C'est pourquoi nous offrons une gamme complète de services stratégiques et opérationnels pour aider nos clients à naviguer avec succès dans cet environnement en mutation.
                        Nous proposons une palette diversifiée de services conçus pour répondre aux besoins spécifiques de chaque entreprise. Nos experts chevronnés travaillent main dans la main avec nos clients pour développer des stratégies personnalisées et mettre en œuvre des solutions innovantes.
                    </div>
                </div>
            </div>

            <div class="videoWrapper">
                <video autoplay="" loop="" muted="" class="custom-video h-screen" poster="videos/792bd98f3e617786c850493560e11c45.jpg">
                    <source :src=coding type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="overlay"></div>
        </section>
    </div>
</template>

<style>

</style>
