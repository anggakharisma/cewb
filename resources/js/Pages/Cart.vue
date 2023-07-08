<script setup lang="ts">
import CartItem from '@/Components/CartItem/CartItem.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { CartItemType } from '@/types';
import { toRaw } from 'vue';

const { cartItems } = defineProps<{
	cartItems: CartItemType[]
}>();
</script>

<template>
	<GuestLayout>
		<div class="w-4/6 p-16 m-auto bg-white rounded-md shadow-sm">
			<h2 class="mb-8 text-3xl font-semibold">Shopping Cart</h2>
			<CartItem v-for="cartItem in cartItems" :cart-item="cartItem" />
		</div>
	</GuestLayout>
</template>