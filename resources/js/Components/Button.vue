<script setup lang="ts">
import { ButtonHTMLAttributes } from 'vue';
import { ButtonSize, ButtonType, Variant } from '../enums/ButtonEnums';


interface ButtonProps extends /* @vue-ignore */ ButtonHTMLAttributes {
	size?: ButtonSize,
	variant: Variant,
}

defineProps<ButtonProps>();
</script>

<template>
	<button :type="type" @click="onClick" :class="{
		'text-sm': size === ButtonSize.SMALL,
		'text-md': size === ButtonSize.MEDIUM,
		'text-xl': size === ButtonSize.LARGE,
		'bg-blue-800 hover:bg-blue-900': variant === Variant.PRIMARY,
		'bg-yellow-800 hover:bg-yellow-600': variant === Variant.WARNING,
		'bg-red-800': variant === Variant.DANGER,
	}" class="px-6 py-3 mt-3 font-semibold text-white transition-all rounded-3xl hover:scale-110 hover:drop-shadow-md">
		<slot />
	</button>
</template>