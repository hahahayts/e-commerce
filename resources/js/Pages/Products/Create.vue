<script setup>
import { ref } from "vue";
import MainLayout from "../MainLayout.vue";

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
