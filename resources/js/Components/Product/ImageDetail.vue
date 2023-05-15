<script setup lang="ts">


defineProps<{
	src: string;
	description: string;
}>();
</script>
<template>
	<div>
		<img :src="src" :alt="description" />
	</div>
</template>
