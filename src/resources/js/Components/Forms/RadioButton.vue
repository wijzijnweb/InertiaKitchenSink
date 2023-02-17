<template>
    <div class="flex items-center">
        <input :id="id"
               :name="name"
               :value="value"
               @change="$emit('update:modelValue', value)"
               type="radio"
               :checked="modelValue === value"
               class="h-4 w-4 border-gray-300 text-primary focus:ring-0">

        <label :for="id" class="ml-2 block text-sm font-medium text-gray-700">
            <slot>
                {{ text }}
            </slot>
        </label>
    </div>
</template>

<script setup>
import {v4 as uuidv4} from 'uuid';
import {ref} from "vue";
const id = ref(uuidv4())

defineProps({
    name: String,
    modelValue: String|Number,
    value: String|Number,
    text: String
})
</script>
