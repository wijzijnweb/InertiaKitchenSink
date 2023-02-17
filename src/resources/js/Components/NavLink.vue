<script setup>
import {computed, ref} from 'vue'
import {Inertia} from "@inertiajs/inertia"

const props = defineProps({
    href: String,
    dropdown: Boolean,
    count: Number,
    icon: String
})

const subOpen = ref(false)
const active = ref(props.href ? location.href?.startsWith(props.href) : false)

const classes = computed(() => {
    return active.value ? 'bg-primary text-white' : '';
})

if(active.value) {
    subOpen.value = true
}

function handleClick() {
    subOpen.value = !subOpen.value

    if(props.href) {
        Inertia.visit(props.href, {
            preserveState: true
        })
    }
    return false;
}
</script>

<template>
    <div class="group">
        <span @click.prevent="handleClick" :class="classes"
              class="flex cursor-pointer items-center justify-between rounded-md px-2 py-1.5 text-center text-sm font-medium text-gray-600 group hover:bg-primary hover:text-white transition-colors">
            <span>
                <i class="mr-3 w-6 text-lg text-gray-400 transition-colors fa-regular group-hover:text-white"
                   :class="[icon, active && '!text-white']"></i>
                <span>
                    <slot/>
                </span>
            </span>

            <button v-if="dropdown">
                <i class="pointer-events-none w-6 text-right text-xs transition-colors text-primary fa-regular group-hover:text-white"
                   :class="{ ' fa-angle-down': !subOpen, ' fa-angle-up': subOpen }"></i>
            </button>

            <span class="flex h-6 w-7 items-center justify-center rounded-sm bg-gray-100 group-hover:bg-primary"
                  v-if="count">{{ count }}</span>
        </span>

        <div :class="{ 'hidden': !subOpen }" class="!group-hover:show">
            <slot name="sub"></slot>
        </div>
    </div>
</template>
