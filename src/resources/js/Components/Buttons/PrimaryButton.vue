<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="relative flex w-full justify-center rounded-md border border-transparent px-4 py-2 text-sm font-medium text-white transition-colors bg-tertiary hover:bg-tertiary-hover">
        <slot />
    </button>
</template>
