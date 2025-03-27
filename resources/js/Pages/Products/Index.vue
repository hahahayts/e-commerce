<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "../MainLayout.vue";
import ProductCard from "../../components/ProductCard.vue";

defineProps({
    products: {
        type: Object,
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
                            >Categories
                        </Link>
                        <ul
                            v-for="category in categories"
                            :key="category.id"
                            class="w-full flex"
                        >
                            <li
                                class="category-link"
                                :class="
                                    selectedCategory?.id == category.id
                                        ? 'active-link-product '
                                        : ''
                                "
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

                <div class="flex justify-end items-center">
                    <div>
                        <Link
                            href="/create-product"
                            class="bg-gray-900 text-white font-semibold text-sm py-2 px-4 rounded-lg"
                        >
                            Add Product
                        </Link>
                    </div>
                </div>
                <ul class="grid grid-cols-1 md:grid-cols-3 gap-6 p-3">
                    <li v-for="product in products.data" :key="product.id">
                        <ProductCard :product="product" />
                    </li>
                </ul>
                <!-- Navigation for Pagination -->

                <div class="flex justify-end mt-3">
                    <div>
                        <Link :href="products.first_page_url"
                            ><i class="bi bi-chevron-double-left"></i
                        ></Link>
                        <Link :href="products.prev_page_url"
                            ><i class="bi bi-chevron-compact-left"></i
                        ></Link>
                        <span
                            >Page {{ products.current_page }} of
                            {{ products.last_page }}
                        </span>
                        <Link :href="products.next_page_url"
                            ><i class="bi bi-chevron-compact-right"></i
                        ></Link>
                        <Link :href="products.last_page_url"
                            ><i class="bi bi-chevron-double-right"></i
                        ></Link>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
