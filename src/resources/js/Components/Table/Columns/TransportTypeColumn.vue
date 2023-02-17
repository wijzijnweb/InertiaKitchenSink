<template>
    <div>
        <i class="text-lg text-primary fa"
           :class="transportTypeClasses"
        ></i>
    </div>
</template>

<script setup>
import {computed} from "vue";

const props = defineProps({
    value: String
})

const transportTypeIconClasses = {
    'TO': 'text-primary fa-arrow-up',
    'TD': 'text-gray-700 fa-arrow-up',
    'TA': 'text-red-500 fa-arrow-down',
}

const transportTypeClasses = computed(() => {
    return transportTypeIconClasses[props.value] ? transportTypeIconClasses[props.value] : ''
})
</script>
