<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import MainLayout from "../MainLayout.vue";

defineProps({
    categories: {
        type: Array,
        required: true,
    },
});

const form = useForm({
    name: "",
    description: "",
    category_id: null,
    whole_sale_price: 0.0,
    retail_price: 0.0,
    imageURL: "",
});

const submit = () => {
    form.post("/products");
};
</script>

<template>
    <MainLayout>
        <div class="wrapper p-5">
            <div class="form">
                <form
                    @submit.prevent="submit"
                    class="w-1/2 flex flex-col gap-3 shadow-lg py-6 px-8"
                >
                    <h1 class="text-center text-3xl font-bold mb-5">
                        Create Products
                    </h1>

                    <div class="inputs">
                        <label for="name">Name:</label>
                        <input type="text" id="name" v-model="form.name" />
                    </div>
                    <p class="error">{{ form.errors.name }}</p>
                    <div class="inputs">
                        <label for="description">Description:</label>
                        <textarea
                            name="description"
                            id="description"
                            cols="5"
                            v-model="form.description"
                        ></textarea>
                    </div>
                    <p class="error">{{ form.errors.description }}</p>

                    <div class="inputs">
                        <label for="image">Image URL:</label>
                        <input type="text" id="name" v-model="form.imageURL" />
                    </div>
                    <p class="error">{{ form.errors.imageURL }}</p>

                    <div class="flex justify-between gap-7">
                        <div class="inputs">
                            <label for="whole_sale_price"
                                >Whole Sale Price:</label
                            >
                            <input
                                type="number"
                                id="whole_sale_price"
                                v-model="form.whole_sale_price"
                            />
                        </div>
                        <p class="error">{{ form.errors.whole_sale_price }}</p>

                        <div class="inputs">
                            <label for="retail_price">Retail Price:</label>
                            <input
                                type="number"
                                id="retail_price"
                                v-model="form.retail_price"
                            />
                        </div>
                        <p class="error">{{ form.errors.retail_price }}</p>
                    </div>

                    <div>
                        <label for="category">Select Catergory</label>
                        <p class="error">{{ form.category_id }}</p>

                        <select
                            name="category"
                            id="category"
                            v-model="category_id"
                        >
                            <option
                                :value="category.id"
                                v-for="category in categories"
                                :key="category.id"
                            >
                                {{ category.name }}
                            </option>
                        </select>
                    </div>

                    <button
                        type="submit"
                        class="inline-block mx-auto border border-gray-900 py-2 px-5 rounded-md transform transition-all hover:bg-gray-900 hover:text-white text-sm font-semibold duration-100 mt-5"
                    >
                        Create New Product
                    </button>
                </form>
            </div>
        </div>
    </MainLayout>
</template>
