<script setup lang="ts">
const props = defineProps<{
	type: "text" | "password"
	variant: "main" | "error"
	name: string,
	placeholder: string,
	value: string;
}>();

const emit = defineEmits<{
	(e: "update:value", value: HTMLInputElement["value"]): HTMLInputElement["value"];
}>();

</script>
<template>
	<input @input="$emit('update:value', ($event.target as HTMLInputElement).value)" :value="value" :name="name" :class="{
		'border-red-300 focus:border-red-600': variant === 'error',
		'border-gray-300 focus:border-gray-600': variant === 'main'
	}" class="w-full py-2 pl-10 rounded-full focus:outline-none focus:ring-0" :type="type" :placeholder="placeholder" />
</template>