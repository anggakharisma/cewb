<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import Input from './Input/Input.vue';
import { reactive } from 'vue';
import CartIcon from '../../assets/icons/Shopping cart.svg';
import MessageIcon from '../../assets/icons/InboxOutline.svg';
import UserIcon from '../../assets/icons/UserOutline.svg';

const state = reactive<{ searchQuery: string }>({
	searchQuery: ''
});

const onSearchChange = (searchQuery: string) => {
	searchQuery = searchQuery;
}
</script>

<template>
	<div class="flex items-center justify-between w-5/6 gap-12 py-10 m-auto align-middle">
		<Link href="/">
		<h1 class="text-2xl font-bold text-blue-800">CEWB</h1>
		</Link>
		<form class="relative flex-1 w-full" @submit.prevent>
			<div class="flex items-center justify-between w-full gap-2 align-middle">
				<button type="submit" class="absolute lg:left-[1.5%] left-[5%] text-gray-500 cursor-pointer">O</button>
				<Input :change="onSearchChange" :value="state.searchQuery" type="text" variant="main" name="search"
					placeholder="Search for a product" />
			</div>
		</form>

		<div class="flex items-center gap-6 align-middle">
			<Link href="/cart">
			<img class="cursor-pointer" :src="CartIcon" alt="see cart item" />
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