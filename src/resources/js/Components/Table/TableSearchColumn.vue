<template>
    <th class="text-left text-xs font-medium text-gray-500 max-w-[8rem]">
        <div class="relative" v-if="column && column.searchable">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 z-20" v-if="column.type !== 'date'">
                <i class="pointer-events-none text-sm text-gray-400 fa-solid fa-search"></i>
            </div>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4  z-20" v-if="column.type === 'date'">
                <i class="pointer-events-none text-sm text-gray-400 fa-regular fa-calendar"></i>
            </div>
            <div class="search-datepicker">
                <input v-if="column.type !== 'date'" v-model="value" class="block w-full border-none pl-10 text-sm focus:ring-0" type="text">
                <Datepicker v-model="value" class="border-0 focus:ring-0 shadow-none  text-sm" v-if="column.type === 'date'"></Datepicker>
            </div>
        </div>
    </th>
</template>

<script setup>
import {watch, computed} from "vue";
import Datepicker from "../Forms/Datepicker.vue";

const props = defineProps({
    modelValue: String,
    column: Object
})

const emit = defineEmits(['update:modelValue'])

const value = computed({
    get() {
        return props.modelValue
    },
    set(val) {
        emit('update:modelValue', val)
        return val
    }
})

watch(value, () => {
    emit('update:modelValue', value.value)
})

</script>

<style>
.search-datepicker > div > svg {
    display: none;
}
</style>
