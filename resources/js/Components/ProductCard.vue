<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Product } from '../types/index';
defineProps<{
	product: Product;
	isBig: boolean;
}>();
</script>

<template>
	<Link :href="`/products/${product.id}`">
	<div class="relative min-h-[25vh] bg-purple-300">
		<img class="object-cover min-h-full h-80" :src="product.image_path" :alt="product.name" />

		<div class="absolute bottom-0 flex justify-between w-full p-2 bg-white bg-opacity-70">
			<p class="text-sm">{{ product.price }}</p>
			<p class="text-sm">{{ product.name.substring(0, 10) }}</p>
		</div>
	</div>
	</Link>
</template>