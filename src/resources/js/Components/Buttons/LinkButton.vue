<template>
    <Link v-bind="$props" :class="variantClasses"
          :preserve-state="true"
          :replace="false"
          class="relative flex h-max w-max h-[38px] items-center justify-center rounded-md border border-transparent px-4 py-2.5 text-sm font-medium text-white transition-colors">

        <slot name="icon"></slot>
        <slot />
        <slot name="icon-suffix"></slot>
    </Link>
</template>

<script setup>
import {Link} from "@inertiajs/inertia-vue3";
import {computed} from "vue";


const props = defineProps({...Link.props, ...{
    color: {
        type: String,
        default: 'default'
    }
}})

const classes = {
    'default': 'bg-primary hover:bg-primary-700',
    'secondary': 'bg-secondary hover:bg-secondary-hover',
    'danger': 'bg-red-500 hover:bg-red-700',
    'warning': 'bg-yellow-500 hover:bg-yellow-700',
    'info': 'bg-blue-500 hover:bg-blue-700',
    'success': 'bg-green-500 hover:bg-green-700'
}

const variantClasses = computed(() => {
    return classes[props.color] ? classes[props.color] : classes['default']
})
</script>
