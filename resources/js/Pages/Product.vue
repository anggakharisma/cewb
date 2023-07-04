<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import DetailDescription from '@/Components/Product/DetailDescription.vue';
import ImageDetail from '@/Components/Product/ImageDetail.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Product } from '@/types';

defineProps<{
	product: Product
}>();

</script>
<template>
	<Head>
		<title>{{ product.name }}</title>
	</Head>
	<GuestLayout>
		<div class="flex justify-center items-center align-middle w-5/6 max-h-[75vh] gap-20 pr-16 m-auto b-40 bg-white mt-8">
			<ImageDetail :src="product.image_path" :description="product.name" />
			<DetailDescription :product="product" />
		</div>
	</GuestLayout>
</template>
