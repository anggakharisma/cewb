<script setup lang="ts">
import DetailDescription from '@/Components/Product/DetailDescription.vue';
import Alert from '@/Components/Alert.vue';
import ImageDetail from '@/Components/Product/ImageDetail.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Product } from '@/types';
import { Head } from '@inertiajs/vue3';

defineProps<{
	product: Product
}>();

</script>
<template>
	<Head>
		<title>{{ product.name }}</title>
	</Head>
	<GuestLayout>
		<div class="relative flex items-center justify-center w-5/6 gap-20 m-auto mt-8 mb-40 align-middle bg-white">
			<ImageDetail :src="product.image_path" :description="product.name" />
			<DetailDescription :product="product" />
		</div>
	</GuestLayout>
</template>
