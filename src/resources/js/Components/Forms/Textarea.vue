<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String|Number,
    type: {
        type: String,
        default: 'text'
    },
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <textarea
        ref="input"
        class="block w-full rounded-md border-gray-300 text-sm shadow-sm focus:border-gray-300 focus:ring-0"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
    ></textarea>
</template>
