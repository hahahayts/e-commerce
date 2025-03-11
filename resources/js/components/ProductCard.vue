<script setup>
const product = defineProps({
    product: {
        type: Object,
    },
});

console.log("Products: ", product.product.imageURL);
</script>

<template>
    <div
        class="w-full shadow-lg flex flex-col space-y-3 py-4 px-3 duration-100 cursor-pointer"
    >
        <h3 class="text-center text-lg text- font-semibold">
            {{ product.product.name }}
        </h3>
        <div>
            <div class="flex items-center">
                <img
                    :src="product.product.imageURL"
                    alt=""
                    class="w-80 md:w-full"
                />
                <p class="text-base truncate">
                    {{ product.product.description }}
                </p>
            </div>

            <div class="flex justify-between mt-3">
                <p class="text-[10px]">
                    Whole Sale Price: P
                    <span>{{ product.product.whole_sale_price }}</span>
                </p>

                <p class="text-[10px]">
                    Retail Price: P
                    <span>{{ product.product.retail_price }} </span>
                </p>
            </div>
        </div>
    </div>
</template>
