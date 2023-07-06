<script setup lang="ts">
import { CheckIcon } from "@heroicons/vue/24/solid";
import { ref } from "vue";

defineProps({
	message: String,
});

const showAlert = ref(true);
setTimeout(() => {
	showAlert.value = false;
}, 2000);

</script>
<template>
	<div v-if="showAlert" @click="showAlert = !showAlert" class="flex p-4 my-4 font-medium rounded-md text-emerald-100 bg-emerald-600 text-md">
		<CheckIcon class="w-6 h-6 mr-4" />
		<p>{{ message }}</p>
		<slot />
	</div>
</template>