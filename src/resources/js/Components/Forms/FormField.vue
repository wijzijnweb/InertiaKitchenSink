<template>
    <div class="mt-1">
        <Label :for="id" :required="required">
            {{ $attrs.placeholder }}&nbsp;
        </Label>

        <slot v-bind:id="id">
            <Input :type="type" v-model="value" v-bind="$attrs" :id="id"  />
        </slot>

        <InputError :message="error" />
    </div>
</template>

<style scoped>
    input:disabled {
        @apply bg-gray-100
    }
</style>

<script setup>
import Input from "@/Components/Forms/Input.vue";
import InputError from "@/Components/Forms/InputError.vue";
import Label from "@/Components/Forms/Label.vue";
import {useVModel} from "@vueuse/core";
import {computed, getCurrentInstance, ref} from "vue";
import {v4 as uuidv4} from 'uuid';

const id = ref(uuidv4())

const emit = defineEmits(['update:modelValue'])

const props = defineProps({
    type: {
        type: String,
        default: 'text'
    },
    required: {
        type: Boolean,
        default: false
    },
    modelValue: String|Number,
    error: String,
})

const value = useVModel(props, 'modelValue', emit)
</script>
