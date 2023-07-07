<script setup lang="ts">
import { CheckIcon, CheckBadgeIcon } from "@heroicons/vue/24/solid";
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
	<div v-if="showAlert" @click="showAlert = !showAlert" class="flex px-8 py-4 my-4 font-medium text-white rounded-md bg-emerald-500 text-md">
		<CheckBadgeIcon class="w-6 h-6 mr-4" />
		<p>{{ message }}</p>
		<slot />
	</div>
</template>