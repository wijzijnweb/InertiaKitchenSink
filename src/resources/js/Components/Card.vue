<template>
    <div class="relative col-span-6 bg-white px-8 py-6 shadow-md w-full">
        <div class="flex justify-between" v-if="title">
            <h4 class="text-base font-semibold">{{ title }}</h4>
        </div>

        <slot />
    </div>
</template>

<script setup>
    defineProps({
        title: String
    })
</script>
