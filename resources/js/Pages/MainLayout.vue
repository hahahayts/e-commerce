<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const isClick = ref(false);

const handleClick = () => {
    isClick.value = !isClick.value;
};
</script>

<template>
    <header class="fixed top-0 w-full bg-blue-400 text-black/80 p-5 z-50">
        <nav class="flex flex-row justify-between md:items-center">
            <div class="logo">
                <h1 class="text-3xl font-semibold">
                    My <span class="text-red-400">LOGO</span>
                </h1>
            </div>

            <div class="hamburger-btn block md:hidden">
                <i
                    @click="handleClick"
                    class="bi bi-list text-3xl font-bold cursor-pointer"
                ></i>

                <div>
                    <div
                        v-if="isClick"
                        class="absolute right-[0.07rem] top-[4.7rem] w-1/2 min-h-screen flex flex-col gap-6 bg-blue-500 p-5 rounded-l-lg"
                        :class="
                            isClick ? 'animate-slide-left' : 'animate-fade-out'
                        "
                    >
                        <Link href="/" class="links">Home</Link>
                        <Link href="/categories" class="links">Categories</Link>
                        <Link href="/products" class="links">Products</Link>
                        <Link href="/faq" class="links">FAQ</Link>
                        <Link href="#" class="links">Support</Link>
                        <Link href="#" class="links">Settings</Link>
                    </div>
                </div>
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
