<script setup lang="ts">
import { Product } from '@/types';

defineProps<{
	product: Product
}>();
</script>

<template>
	<div class="flex flex-col justify-center w-full mt-8">
		<div>
			<h2 class="text-4xl font-bold">{{ product.name }}</h2>
			<p class="text-lg">$ {{ product.price }}</p>
		</div>

		<button type="button" class="self-start p-4 py-2 mt-8 font-semibold text-white bg-blue-800 rounded-full">Add to cart</button>
	</div>
</template>