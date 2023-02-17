<template>
    <select @input="$emit('update:modelValue', $event.target.value)" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        <slot>
            <option v-for="(text, value) in options" :selected="value === modelValue" :value="value">{{ text }}</option>
        </slot>
    </select>
</template>

<script setup>

import {useSlots} from "vue";

const props = defineProps({
    options: Array|Object,
    modelValue: String|Number
})

const slots = useSlots()

if(slots.default) {
    slots.default().map((option) => {
        if (option.props) {
            option.props.selected = option.props.value === props.modelValue
        }
        return option
    })
}
</script>
