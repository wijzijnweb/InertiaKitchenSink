<template>
    <td class="py-1.5 px-4 h-10 text-xs text-gray-500">
        <slot />
        <component v-if="column"
                   :is="component ? component : null"
                   :column="column"
                   :value="value" />
    </td>
</template>

<script setup>
import {computed, defineAsyncComponent} from "vue";

const props = defineProps({
    value: null,
    column: Object
})

const component = computed(() => {
    if(props.column?.component) {
        return defineAsyncComponent(() => import(`./Columns/${props.column.component}.vue`))
    }
})
</script>
