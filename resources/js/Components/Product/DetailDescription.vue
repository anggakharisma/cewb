<script setup lang="ts">
import { ButtonSize, Variant } from '@/enums/ButtonEnums';
import { Product } from '@/types';
import Button from '../Button.vue';

defineProps<{
	product: Product
	addToCart: any
	isAdding: Boolean
}>();

</script>

<template>
	<div class="flex flex-col w-full">
		<div>
			<h2 class="mb-2 text-4xl font-semibold">{{ product.name }}</h2>
			<p class="text-lg font-light">$ {{ product.price }}</p>

			<p class="w-1/2 mt-8 font-light">
				{{  product.description }}
			</p>
		</div>

		<div class="self-start mt-16">
			<Button :disabled="isAdding ? true : false" :size="ButtonSize.MEDIUM" type="submit" :variant="Variant.PRIMARY"
				@click="addToCart(product)">
				Add To Cart
			</Button>
		</div>
	</div>
</template>