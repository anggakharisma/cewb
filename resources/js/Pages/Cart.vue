<script setup lang="ts">
import CartItem from '@/Components/CartItem/CartItem.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { CartItemType } from '@/types';
import { computed, toRaw } from 'vue';

const { cartItems } = defineProps<{
	cartItems: CartItemType[]
}>();

const reversedCartItes = Object.entries(toRaw(cartItems)).map(e => e[1]).reverse();

</script>

<template>
	<GuestLayout>
		<div class="w-4/6 p-16 m-auto bg-white rounded-md shadow-sm">
			<h2 class="mb-8 text-3xl font-semibold">Shopping Cart</h2>
			<CartItem v-for="cartItem in reversedCartItes" :cart-item="cartItem" />
		</div>
	</GuestLayout>
</template>