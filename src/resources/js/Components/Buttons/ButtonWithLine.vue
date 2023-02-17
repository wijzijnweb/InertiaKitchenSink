<template>
    <div class="relative">
        <Button v-bind="$props" class="relative z-10 mx-auto">
            <template #icon>
                <slot name="icon">
                    <i class="pointer-events-none mr-2 text-xs text-gray-400 fa-solid fa-plus"></i>
                </slot>
            </template>
            <slot />
        </Button>
        <span class="absolute top-1/2 w-full translate-y-1/2 border border-gray-300"></span>
    </div>
</template>
<script setup>
import Button from "@/Components/Buttons/Button.vue";


defineProps({
    ...Button.props
})
</script>
