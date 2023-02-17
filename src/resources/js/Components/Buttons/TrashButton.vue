<template>
    <button class="text-red-500" @click.prevent="handleButton">
        <i class="pointer-events-none text-sm fa-regular fa-trash-alt"></i>
    </button>
</template>

<script setup>

import useAlert from "@/Shared/useAlert.js";
const { remove } = useAlert();

const emit = defineEmits(['confirmed'])

async function handleButton() {
    const res = await remove()

    if(res.isConfirmed) {
        emit('confirmed')
    }
}

</script>
