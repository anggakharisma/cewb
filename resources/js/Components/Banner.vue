<script setup lang="ts">
import { ButtonSize, ButtonType, Variant } from '@/Enums/ButtonEnums';
import Button from './Button.vue';
</script>

<template>
	<div class="flex items-center m-auto align-middle full bg-[url('/hero.jpg')] bg-cover bg-bottom relative min-h-[40vh]">
		<div class="absolute top-0 bottom-0 left-0 right-0 bg-[#032335] bg-opacity-60 z-0"></div>
		<div class="z-10 w-5/6 m-auto">
			<p class="text-4xl font-bold text-white">LOOKING FOR SOMETHING ? <br /> WE GOT YOU</p>
			<Button :size="ButtonSize.MEDIUM" :type="ButtonType.BUTTON" :variant="Variant.PRIMARY">Check Sales</Button>
		</div>
	</div>
</template>