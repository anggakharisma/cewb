<script setup lang="ts">
import CartDetail from './CartDetail.vue';
import CartImage from './CartImage.vue';
import QuantityControl from './QuantityControl.vue';


</script>
<template>
	<div class="flex w-full ">
		<CartImage />
		<CartDetail />
		<QuantityControl />
	</div>
</template>