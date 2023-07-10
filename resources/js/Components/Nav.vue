<script setup lang="ts">
import { GlobalProps } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';
import { computed, reactive } from 'vue';
import MessageIcon from '../../assets/icons/InboxOutline.svg';
import CartIcon from '../../assets/icons/Shopping cart.svg';
import UserIcon from '../../assets/icons/UserOutline.svg';
import Input from './Input/Input.vue';

const page = usePage<GlobalProps>();
const cartLength = computed(() => Object.keys(page.props.cart).length);

const state = reactive<{ searchQuery: string }>({
	searchQuery: ''
});

const onSearchChange = (searchQuery: string) => {
	state.searchQuery = searchQuery;
}
</script>

<template>
	<div class="flex items-center justify-between w-5/6 gap-12 py-10 m-auto align-middle">
		<Link href="/">
		<h1 class="text-2xl font-bold text-blue-800">CEWB</h1>
		</Link>
		<form class="relative flex-1 w-full" @submit.prevent>
			<div v-if="state.searchQuery !== ''" class="absolute z-40 w-full px-10 py-2 bg-white border-[1px] border-gray-300 border-solid rounded-full top-12">
				<p class="font-light text-gray-600 text-md text-400"> searching for: {{ state.searchQuery }}</p>
			</div>
			<div class="flex items-center justify-between w-full gap-2 align-middle">
				<button type="submit" class="absolute lg:left-[1.5%] left-[5%] text-gray-500 cursor-pointer">O</button>
				<Input @update:value="onSearchChange" :change="onSearchChange" :value="state.searchQuery" type="text"
					variant="main" name="search" placeholder="Search for a product" />
			</div>
		</form>

		<div class="flex items-center gap-6 align-middle">
			<Link href="/cart">
			<div class="relative">
				<p class="absolute p-1 px-2 text-[9px] text-white bg-red-400 rounded-full -top-3 -right-2">{{
					cartLength }}</p>
				<img class="cursor-pointer" :src="CartIcon" alt="see cart item" />
			</div>
			</Link>
			<img class="cursor-pointer" :src="MessageIcon" alt="see cart item" />
			<Link v-if="$page.props.auth.user" href="/dashboard">
			<img class="cursor-pointer" :src="UserIcon" alt="see cart item" />
			</Link>
			<Link v-else href="/login">
			<img class="cursor-pointer" :src="UserIcon" alt="see cart item" />
			</Link>
		</div>
	</div>
</template>