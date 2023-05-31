<script setup lang="ts">
import { Product } from '@/types';
import Button from '../Button.vue';
import { ButtonSize, ButtonType, Variant } from '@/enums/ButtonEnums';

defineProps<{
	product: Product
}>();
</script>

<template>
	<div class="flex flex-col justify-between w-full my-32">
		<div>
			<h2 class="text-4xl font-semibold">{{ product.name }}</h2>
			<p class="text-lg font-light">$ {{ product.price }}</p>

			<p class="w-1/2 mt-4 font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, in adipisci nisi vel saepe repellat aliquid ullam quis dolores quisquam recusandae quo illum soluta temporibus veritatis veniam eaque modi voluptates!</p>
		</div>

		<div class="self-start">
			<Button :size="ButtonSize.MEDIUM" :type="ButtonType.BUTTON" :variant="Variant.PRIMARY">
				Add To Cart
			</Button>
		</div>
		<div></div>
	</div>
</template>