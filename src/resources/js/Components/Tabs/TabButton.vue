<template>
    <button
        @click.prevent="setActiveTab"
        :class="{ 'border-indigo-100 bg-indigo-100 text-primary': activeTab === name }"
        class="cursor-pointer rounded border border-gray-300 hover:border-indigo-100 hover:bg-indigo-100 px-3 py-1.5 text-xs font-medium text-gray-700 drop-shadow-sm transition-colors hover:text-primary">
        <slot />
    </button>
</template>

<script setup>
import {computed, getCurrentInstance} from "vue";

const instance = getCurrentInstance()
const activeTab = computed( {
    get() {
        return instance.parent?.setupState?.activeTab
    },
    set(val) {
        if(instance.parent?.setupState?.activeTab) {
            instance.parent.setupState.activeTab = val
        }
        return val
    }
})

const props = defineProps({
    name: {
        type: String,
        required: true
    }
})

const emit = defineEmits(['update:modelValue'])

function setActiveTab() {
    emit('update:modelValue', props.name)
    activeTab.value = props.name
}
</script>
