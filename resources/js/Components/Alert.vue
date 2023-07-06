<script setup lang="ts">
import { CheckIcon } from '@heroicons/vue/24/solid'
defineProps({
	message: String
})
</script>
<template>
	<div
		class="fixed flex p-8 px-4 py-2 font-normal text-green-700 -translate-x-1/2 bg-green-200 rounded-md text-md top-10 left-1/2">
		<CheckIcon class="w-6 h-6 mr-4" />
		<p>{{ message }}</p>
		<slot />
	</div>
</template>