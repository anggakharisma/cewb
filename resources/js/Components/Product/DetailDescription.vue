<script setup lang="ts">
import { Product } from '@/types';
import Button from '../Button.vue';
import { ButtonSize, ButtonType, Variant } from '../../Enums/ButtonEnums';

defineProps<{
	product: Product
}>();
</script>

<template>
	<div class="flex flex-col justify-center w-full mt-8">
		<div>
			<h2 class="text-4xl font-semibold">{{ product.name }}</h2>
			<p class="text-lg font-light">$ {{ product.price }}</p>
		</div>

		<div class="self-start">
			<Button :size="ButtonSize.MEDIUM" :type="ButtonType.BUTTON" :variant="Variant.PRIMARY">
				Add To Cart
			</Button>
		</div>
	</div>
</template>