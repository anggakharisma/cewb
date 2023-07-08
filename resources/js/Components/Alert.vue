<script setup lang="ts">
import { CheckIcon, CheckBadgeIcon } from "@heroicons/vue/24/solid";
import { ref } from "vue";

defineProps<{
	message: string | null
}>();

const showAlert = ref(true);
setTimeout(() => {
	showAlert.value = false;
}, 2000);

</script>
<template>
	<Transition>
		<div v-if="showAlert" @click="showAlert = !showAlert"
			class="flex px-8 py-4 my-4 font-medium text-white transition-all rounded-md bg-emerald-500 text-md">
			<p>{{ message }}</p>
			<CheckBadgeIcon class="w-6 h-6 ml-4" />
			<slot />
		</div>
	</Transition>
</template>