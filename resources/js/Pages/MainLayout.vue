<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "./MainLayout.vue";
</script>

<template>
    <header class="fixed top-0 w-full bg-blue-400 text-black/80 p-5">
        <nav class="flex flex-row justify-between md:items-center">
            <div class="logo">
                <h1 class="text-3xl font-semibold">
                    My <span class="text-red-400">LOGO</span>
                </h1>
            </div>

            <div class="hamburger-btn block md:hidden">
                <i class="bi bi-list text-3xl font-bold"></i>
            </div>
            <div class="hidden md:flex flex-col md:flex-row md:space-x-4">
                <Link href="/" class="links">Home</Link>
                <Link href="/categories" class="links">Categories</Link>
                <Link href="/products" class="links">Products</Link>
                <Link href="/faq" class="links">FAQ</Link>
                <Link href="#" class="links">Support</Link>
            </div>
        </nav>
    </header>
    <main class="mt-20">
        <slot />
    </main>
</template>
