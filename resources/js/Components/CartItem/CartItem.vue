<script setup lang="ts">

import { CartItemType } from '@/types';

const props = defineProps<{
	cartItem: CartItemType
}>();

</script>
<template>
	<div class="flex items-center gap-10 my-4 align-middle">
		<img class="object-cover w-60 h-60" :src="cartItem.attributes.imagePath" />
		<div class="">
			<p class="text-xl font-medium text-black">{{ cartItem.name }}</p>
			<p class="text-gray-500">Quantity: {{ cartItem.quantity }}</p>
			<p class="text-gray-600">$ {{ cartItem.price * cartItem.quantity }}</p>
		</div>
		<div class="px-3 py-2 text-xs text-white bg-red-500 rounded-full hover:cursor-pointer">X</div>
	</div>
</template>