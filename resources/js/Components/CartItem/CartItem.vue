<script setup lang="ts">

import { CartItemType } from '@/types';
const props = defineProps<{
	cartItem: CartItemType
}>();

</script>
<template>
	<div class="flex w-full">
		<p>{{ cartItem.name }}</p>
		<p>{{ cartItem.quantity }}</p>
	</div>
</template>