<template>
    <button v-bind="$attrs"
            :class="variantClasses"
            class="relative flex h-max w-max h-[38px] items-center justify-center rounded-md border px-4 py-2.5 text-sm font-medium text-white transition-colors">

        <slot name="icon"></slot>
        <slot />
        <slot name="icon-suffix"></slot>
    </button>
</template>

<script setup>
import {computed} from "vue";

const props = defineProps({
    color: {
        type: String,
        default: 'default'
    }
})

const classes = {
    'default': 'bg-primary hover:bg-primary-700',
    'secondary': 'bg-secondary hover:bg-secondary-hover',
    'danger': 'bg-red-500 hover:bg-red-700',
    'warning': 'bg-yellow-500 hover:bg-yellow-700',
    'info': 'bg-blue-500 hover:bg-blue-700',
    'success': 'bg-green-500 hover:bg-green-700',
    'gray': 'border-gray-300 bg-white hover:bg-gray-100 text-black text-gray-900 border'
}

const variantClasses = computed(() => {
    return classes[props.color] ? classes[props.color] : classes['default']
})
</script>
