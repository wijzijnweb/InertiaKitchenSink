<template>
    <div>
        {{ readable }}
    </div>
</template>

<script setup>
import dayjs from "dayjs";
import {computed} from "vue";

const props = defineProps({
    value: String
})

const readable = computed(() => {
    return dayjs(props.value).format('DD MMM YYYY - HH:mm')
})
</script>
