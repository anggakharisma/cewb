<script setup lang="ts">
import DetailDescription from '@/Components/Product/DetailDescription.vue';
import ImageDetail from '@/Components/Product/ImageDetail.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Product } from '@/types';

defineProps<{
	product: Product
}>();

</script>
<template>
	<GuestLayout>
		<div class="flex items-stretch w-5/6 max-h-[75vh] gap-20 pr-16 m-auto mb-40 bg-white">
			<ImageDetail :src="product.image_path" :description="product.name" />
			<DetailDescription :product="product" />
		</div>
	</GuestLayout>
</template>
