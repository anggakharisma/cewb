<script setup lang="ts">
import Banner from '@/Components/Banner.vue';
import ProductCard from '@/Components/ProductCard.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
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
			<div class="flex justify-between w-full gap-4">
				<ProductCard :is-big="false" v-for="product in products.slice(0, 5)" :product="product" />
			</div>
			<div class="w-full my-8">
				<h1 class="my-8 text-xl font-semibold text-gray-700">FEATURED PRODUCTS</h1>
				<div class="grid grid-cols-2 gap-8 align-middle">
					<div class="relative h-[40vw]">
						<Link :href="`/products/${products[3].id}`">
						<img class="object-cover w-full h-full" :src="products[3].image_path" :alt="products[3].name" />

						<div class="absolute bottom-0 flex justify-between w-full p-2 bg-white bg-opacity-70">
							<p class="text-sm">$ {{ products[3].price }}</p>
							<p class="text-sm">{{ products[3].name.substring(0, 10) }}</p>
						</div>
						</Link>
					</div>
					<div class="grid justify-between h-full grid-cols-3 gap-8">
						<ProductCard :is-big="false" v-for="product in products.slice(0, 6)" :product="product" />
					</div>
					<br />
				</div>
			</div>
		</div>
	</GuestLayout>
</template>