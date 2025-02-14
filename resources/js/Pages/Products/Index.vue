<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "../MainLayout.vue";
import ProductCard from "../../components/ProductCard.vue";

defineProps({
    products: {
        type: Array,
        required: true,
    },
    categories: {
        type: Array,
        required: true,
    },
    selectedCategory: {
        type: String,
        required: false,
    },
});
</script>

<template>
    <MainLayout>
        <div class="flex flex-col md:flex-row">
            <div
                class="w-full md:w-[20%] md:shadow-lg px-2 pt-3 md:min-h-screen"
            >
                <nav class="">
                    <!-- for phone  -->
                    <div
                        class="fixed top-[4.7rem] left-0 w-screen flex item-center sm:hidden md:hidden p-3 bg-sky-400 overflow-x-scroll z-10"
                    >
                        <ul class="flex space-x-5">
                            <li
                                v-for="category in categories"
                                :key="category.id"
                                class="links truncate"
                            >
                                <Link :href="'/products/' + category.id">{{
                                    category.name
                                }}</Link>
                            </li>
                        </ul>
                    </div>
                    <!-- for phone  -->

                    <!-- for bigger screen sizes -->
                    <div
                        class="hidden md:flex flex-col md:flex-col md:w-full gap-1"
                    >
                        <Link
                            href="/products"
                            class="text-center text-2xl font-semibold text-black/80"
                            >Categories</Link
                        >
                        <ul
                            v-for="category in categories"
                            :key="category.id"
                            class="w-full flex"
                        >
                            <li
                                class="p-2 hover:bg-gray-900 hover:text-slate-200 rounded-r-lg duration-100 cursor-pointer"
                            >
                                <Link :href="'/products/' + category.id">{{
                                    category.name
                                }}</Link>
                            </li>
                        </ul>
                        <!-- for bigger screen sizes -->
                    </div>
                </nav>
            </div>

            <div class="w-full md:w-3/4 p-5 mt-[5.3rem] md:mt-0">
                <h1 class="text-4xl font-semibold text-center mb-5">
                    {{
                        selectedCategory
                            ? selectedCategory.name
                            : "All Products"
                    }}
                </h1>
                <ul class="grid grid-cols-1 md:grid-cols-3 gap-6 p-3">
                    <li v-for="product in products" :key="product.id">
                        <ProductCard :product="product" />
                    </li>
                </ul>
            </div>
        </div>
    </MainLayout>
</template>
