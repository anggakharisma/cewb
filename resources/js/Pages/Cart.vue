<script setup lang="ts">
import CartItem from '@/Components/CartItem/CartItem.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';

</script>

<template>
	<GuestLayout>
		<div class="w-5/6 p-8 m-auto bg-white rounded-md shadow-sm">
			<h2 class="mb-8 text-3xl font-semibold">Shopping Cart</h2>
			<CartItem />
		</div>
	</GuestLayout>
</template>