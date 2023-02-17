<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    href: String,
    active: Boolean,
    count: Number,
});

const classes = computed(() => {
    return props.active ? 'bg-indigo-50 text-primary' : '';
});
</script>

<template>
    <Link :href="href" :class="classes" class="flex justify-between items-center rounded-md px-2 py-1.5 text-center text-xs text-gray-600 group hover:bg-indigo-50 hover:text-primary transition-colors h-9">
        <span>
            <slot />
        </span>
        <span class="flex h-6 w-7 items-center justify-center rounded-sm bg-gray-100 group-hover:bg-white" v-if="count">{{ count }}</span>
    </Link>
</template>
