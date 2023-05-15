<script setup lang="ts">
import Banner from '@/Components/Banner.vue';
import ProductCard from '@/Components/ProductCard.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import { shuffleArray } from '@/libs/array';
import { computed } from 'vue';
import { Product } from '@/types';

const props = defineProps<{
	canLogin?: boolean;
	canRegister?: boolean;
	laravelVersion: string;
	phpVersion: string;
	products: Product[];
}>();

const shuffledProducts = computed(() => {
	return shuffleArray<Product>(props.products);
})

</script>

<template>
	<GuestLayout>

		<Head title="CEWB" />
		<Banner />

		<div class="w-5/6 m-auto mt-4">
			<h1 class="my-8 text-xl font-semibold text-gray-800">ON SALE <span class="text-green-500">%</span></h1>
			<div class="flex justify-between w-full h-full gap-8 min-h-[20vh]">
				<ProductCard :is-big="false" v-for="product in shuffledProducts.slice(0, 5)" :product="product" />
			</div>
			<div class="w-full my-8">
				<h1 class="text-xl font-semibold text-gray-700">FEATURED PRODUCTS</h1>

				<div class="grid w-full grid-cols-2 gap-16">
					<div class="relative w-full bg-purple-300">
						<img class="object-cover w-full min-h-full" :src="products[3].image_path" :alt="products[3].name" />

						<div class="absolute bottom-0 flex justify-between w-full p-2 bg-white bg-opacity-70">
							<p class="text-sm">{{ products[3].price }}</p>
							<p class="text-sm">{{ products[3].name.substring(0, 10) }}</p>
						</div>
					</div>

					<div class="grid grid-cols-3 justify-between w-full h-full gap-16 min-h-[20vh]">
						<ProductCard :is-big="false" v-for="product in shuffledProducts.slice(0, 6)" :product="product" />
					</div>

				</div>
			</div>
		</div>
	</GuestLayout>
</template>