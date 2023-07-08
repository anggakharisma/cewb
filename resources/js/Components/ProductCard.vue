<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Product } from '../types/index';
defineProps<{
	product: Product;
}>();
</script>

<template>
	<div class="relative w-full h-full overflow-hidden">
		<Link :href="`/products/${product.id}`">
		<img class="object-cover w-80 h-60 aspect-video" :src="product.image_path" :alt="product.name" />

		<div class="absolute bottom-0 flex justify-between w-full p-2 bg-white bg-opacity-70">
			<p class="text-sm">$ {{ product.price }}</p>
			<p class="text-sm">{{ product.name.substring(0, 10) }}</p>
		</div>
		</Link>
	</div>
</template>