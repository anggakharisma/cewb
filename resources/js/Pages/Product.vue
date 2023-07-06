<script setup lang="ts">
import Alert from '@/Components/Alert.vue';
import DetailDescription from '@/Components/Product/DetailDescription.vue';

import ImageDetail from '@/Components/Product/ImageDetail.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { store } from '@/store';
import { GlobalProps, Product } from '@/types';
import { Head, router, usePage } from '@inertiajs/vue3';
import { reactive, ref } from 'vue';

const page = usePage<GlobalProps>();
const isAdding = ref(false);
const props = defineProps<{
	product: Product
}>();

const formProduct = reactive({
	product: props.product,
	toastCount: 0
});

const addToCart = async (product: Product) => {
	isAdding.value = true;
	await store.cart.push(product);
	await formProduct.toastCount++;
	router.post("/cart", formProduct.product);
	isAdding.value = false;
}

</script>
<template>
	<Head>
		<title>{{ product.name }}</title>
	</Head>
	<GuestLayout>
		<div class="fixed z-40 -translate-x-1/2 top-10 left-1/2 bg-red">
			<Alert v-for="count in formProduct.toastCount" :message="page.props.flash.message"
				v-if="page.props.flash.message" />
		</div>
		<div class="relative flex items-center justify-center w-5/6 gap-20 m-auto mt-8 mb-40 align-middle bg-white">
			<ImageDetail :src="product.image_path" :description="product.name" />
			<DetailDescription :is-adding="isAdding" :add-to-cart="addToCart" :product="product" />
		</div>
	</GuestLayout>
</template>
