<template>
    <label :for="for" class="block text-sm font-medium text-gray-700">
        <slot /> <span class="text-red-600" v-if="required">*</span>
    </label>
</template>

<script setup>

defineProps({
    for: String,
    required: {
        type: Boolean,
        default: false
    }
})

</script>
