<script setup>
import Footer from '../Components/Footer.vue'
import Header from '../Components/Header.vue'
import Frontend from '@/Layouts/Frontend.vue'
import { Head, Link } from "@inertiajs/inertia-vue3";

</script>

<template>
    <Head title="Welcome to Portfolio" />
    <Header />
    <main class="min-h-screen">
        <slot />

    </main>
    <Footer />
</template>
