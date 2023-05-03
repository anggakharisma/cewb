<script setup lang="ts">
type Product = {
	name: string;
	price: number;
	image_path: string;
}
defineProps<{
	product: Product;
	isBig: boolean;
}>();
</script>

<template>
	<div class="relative min-h-[25vh] bg-purple-300">
		<img class="object-cover min-h-full" :src="product.image_path" :alt="product.name" />

		<div class="absolute bottom-0 flex justify-between w-full p-2 bg-white bg-opacity-70">
			<p class="text-sm">{{ product.price }}</p>
			<p class="text-sm">{{ product.name.substring(0, 10) }}</p>
		</div>
	</div>
</template>