<script setup>
import Portfolio from '../Components/Portfolio.vue'
import Skills from '../Components/Skills.vue'
import About from '../Components/About.vue'
import Promote from '../Components/Promote.vue'
import Hero from '../Components/Hero.vue'
import Footer from '../Components/Footer.vue'
import Header from '../Components/Header.vue'
import Frontend from '@/Layouts/Frontend.vue'
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
    skills: Object,
    projects: Object,
})

</script>

<template>
    <Head title="Welcome to Portfolio" />
    <!-- Header -->
    <Header />
    <!-- Hero -->
    <Hero />
    <!-- Promote -->
    <Promote />
    <!-- About -->
    <About />
    <!-- Skills -->
    <Skills :skills="skills" />
    <!-- Portfolio -->
    <Portfolio :skills="skills" :projects="projects" />
    <main class="min-h-screen">
        <slot />

    </main>
    <Footer />
</template>
