<template>
    <div class="relative">
        <div  v-if="!inline" class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <i class="pointer-events-none text-sm fa-regular fa-calendar-alt text-tertiary" v-if="!noCalendar"></i>
            <i class="pointer-events-none text-sm fa-regular fa-clock text-tertiary" v-if="noCalendar && time"></i>
        </div>
        <div class="datepicker" data-mdb-toggle-button="false">
            <input ref="datePicker"
                   :class="{ 'hidden': inline }"
                   :data-inline="inline"
                   :value="modelValue"
                   class="flatpickr block w-full rounded-md border-gray-300 pl-8 text-sm focus:border-gray-300 focus:ring-0"
                   type="text"
                   v-bind="{ ...$attrs, ...$props}">

            </div>
    </div>
</template>

<script setup>
import 'flatpickr/dist/flatpickr.css';
import flatpickr from "flatpickr";
import {onMounted, ref} from "vue";

const emit = defineEmits(['update:modelValue', 'onChange'])
const datePicker = ref(null)

const props = defineProps({
    modelValue: String,
    inline: {
        type: Boolean,
        default: false
    },
    time: {
        type: Boolean,
        default: false
    },
    dateFormat: {
        type: String,
        default: 'd-m-Y'
    },
    config: {
        type: Object,
        default: {}
    },
    noCalendar: {
        type: Boolean,
        default: false
    }
})

onMounted(() => {
    flatpickr(datePicker.value, { ...{
        dateFormat: props.dateFormat,
        time_24hr: true,
        noCalendar: props.noCalendar,
        enableTime: props.time,
        onChange: (selectedDates, date) => {
            emit('onChange', date)
            emit('update:modelValue', date)
        },
    }, ...props.config });
})
</script>
