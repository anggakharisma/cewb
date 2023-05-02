<script setup lang="ts">
import Banner from '@/Components/Banner.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps<{
	canLogin?: boolean;
	canRegister?: boolean;
	laravelVersion: string;
	phpVersion: string;
}>();
</script>

<template>
	<GuestLayout>
		<Head title="CEWB" />
		<Banner />
	</GuestLayout>
</template>