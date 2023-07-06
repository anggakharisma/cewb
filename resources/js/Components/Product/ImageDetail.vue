<script setup lang="ts">


defineProps<{
	src: string;
	description: string;
}>();
</script>
<template>
	<div class="relative inline-block w-3/4 max-h-[50vh] overflow-hidden">
		<img class="inline-block object-cover w-full h-full overflow-hidden transition-all hover:scale-110" :src="src" :alt="description" />
	</div>
</template>