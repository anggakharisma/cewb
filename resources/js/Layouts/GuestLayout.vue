<script setup lang="ts">
import Nav from '@/Components/Nav.vue';
</script>

<template>
    <div class="dark:bg-gray-900">
			<Nav />
        <div>
            <slot />
        </div>
    </div>
</template>
