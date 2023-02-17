<template>
    <div v-if="activeTab === name">
        <slot />
    </div>
</template>

<script setup>
import {computed, getCurrentInstance} from "vue";

const instance = getCurrentInstance()
const activeTab = computed(() => {
    return instance.parent?.setupState?.activeTab
})

defineProps({
    name: {
        type: String,
        required: true
    }
})
</script>
