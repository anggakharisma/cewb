<script setup lang="ts">
import { Product } from '@/types';
import Button from '../Button.vue';
import { store } from '@/store';
import { ButtonSize, ButtonType, Variant } from '@/enums/ButtonEnums';
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue';

const props = defineProps<{
	product: Product
}>();

const formProduct = reactive({
  product: props.product
})

const addToCart = async (product: Product) => {
	store.cart.push(product);
	router.post("/cart", formProduct);
}

</script>

<template>
	<div class="flex flex-col w-full">
		<div>
			<h2 class="text-4xl font-semibold">{{ product.name }}</h2>
			<p class="text-lg font-light">$ {{ product.price }}</p>

			<p class="w-1/2 mt-4 font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, in adipisci
				nisi vel saepe repellat aliquid ullam quis dolores quisquam recusandae quo illum soluta temporibus veritatis
				veniam eaque modi voluptates!</p>
		</div>

		<div class="self-start mt-16">
			<Button :size="ButtonSize.MEDIUM" type="submit" :variant="Variant.PRIMARY" @click="addToCart(product)">
				Add To Cart
			</Button>
		</div>
	</div>
</template>