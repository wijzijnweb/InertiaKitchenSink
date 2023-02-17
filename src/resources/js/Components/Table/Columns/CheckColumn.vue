<template>
    <div>
        <div v-if="value" class="text-lg text-primary fa fa-check"></div>
    </div>
</template>

<script setup>
defineProps({
    value: Boolean
})
</script>
