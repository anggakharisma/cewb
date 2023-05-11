<script setup lang="ts">
import { ButtonSize, ButtonType, Variant } from '../Enums/ButtonEnums';

defineProps<{
	type: ButtonType,
	size?: ButtonSize,
	variant: Variant,
	onClick?: ((payload: MouseEvent) => void) | undefined

}>();
</script>

<template>
	<button @click="onClick" :class="{
		'text-sm': size === ButtonSize.SMALL,
		'text-md': size === ButtonSize.MEDIUM,
		'text-xl': size === ButtonSize.LARGE,
		'bg-blue-800 hover:bg-blue-900': variant === Variant.PRIMARY,
		'bg-yellow-800 hover:bg-yellow-600': variant === Variant.WARNING,
		'bg-red-800': variant === Variant.DANGER,
	}"
		class="px-6 py-3 mt-3 font-semibold text-white transition-all rounded-3xl hover:scale-110 hover:drop-shadow-md">
		<slot />
	</button>
	
</template>