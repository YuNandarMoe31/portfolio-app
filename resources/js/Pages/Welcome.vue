<script setup>
import About from '../Components/About.vue'
import Promote from '../Components/Promote.vue'
import Hero from '../Components/Hero.vue'
import Footer from '../Components/Footer.vue'
import Header from '../Components/Header.vue'
import Frontend from '@/Layouts/Frontend.vue'
import { Head, Link } from "@inertiajs/inertia-vue3";

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
    <main class="min-h-screen">
        <slot />

    </main>
    <Footer />
</template>
