<script setup>
import { ref } from "vue";
import MainLayout from "../MainLayout.vue";

defineProps({
    categories: {
        type: Array,
        required: true,
    },
});

const submit = () => {};
</script>

<template>
    <MainLayout>
        <h1>Create Products</h1>

        <div>
            <form @submit.prevent="submit"></form>
        </div>
    </MainLayout>
</template>
