<script setup lang="ts">

import { CartItem } from '@/types';
defineProps<{
	cartItem: CartItem
}>();
</script>
<template>
	<div class="flex w-full">
		<p>{{ cartItem.name }}</p>
		<p>{{ cartItem.quantity }}</p>
	</div>
</template>