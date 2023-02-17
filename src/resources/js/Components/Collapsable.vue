<template>
    <div class="relative">
        <div class="flex ml-3.5 absolute z-10 right-6 top-6 gap-4">
            <template  v-if="!edit || (edit && isOpen)">
                <div class="flex items-center">
                    <input type="checkbox" :value="1" class="h-4 w-4 rounded border-gray-300 text-secondary focus:ring-0" v-model="alwaysOpen" @change="updateAlwaysOpen" />
                    <label class="ml-2 block text-xs text-primary">Altijd open</label>
                </div>

                <button @click.prevent="toggleBlock">
                    <i class="pointer-events-none text-base text-primary fa-regular" :class="{
                        'fa-angle-up': isOpen,
                        'fa-angle-down': !isOpen,
                    }"></i>
                </button>
            </template>

            <div class="flex items-center" v-if="edit && !isOpen">
                <button class="ml-3.5" @click.prevent="toggleBlock">
                    <i class="pointer-events-none text-base text-primary fa-regular fa-pencil"></i>
                </button>
            </div>
        </div>

        <template v-if="isOpen">
            <slot />
        </template>

        <template v-else>
            <slot name="collapsed">
                <h3>{{ title }}</h3>
            </slot>
        </template>
    </div>
</template>

<script setup>
import {usePage} from "@inertiajs/inertia-vue3";
import {computed, ref} from "vue";

const props = defineProps({
    title: String,
    name: {
        type: String,
        required: true
    },
    closedByDefault: {
        type: Boolean,
        default: false
    },
    edit: {
        type: Boolean,
        default: true
    }
})

const user = usePage().props.value.user

const currentSettings = computed(() => {
    const res = user.collapsables.filter((c) => {
        return c.collapsable_id === props.name
    })[0]

    return res ? res : {}
})

const alwaysOpen = ref(!!currentSettings.value.always_open)

let currentState = !props.closedByDefault
if(currentSettings.value.current_state) {
    currentState = true
}
if(currentSettings.value.always_open) {
    currentState = true
}

const isOpen = ref(currentState)

function toggleBlock() {
    isOpen.value = ! isOpen.value

    storeCollapsable({
        current_state: isOpen.value
    })
}

function updateAlwaysOpen() {
    if(!isOpen.value && alwaysOpen.value) {
        isOpen.value = true
    }

    storeCollapsable({
        always_open: alwaysOpen.value
    })
}

function storeCollapsable(data) {
    axios.post(route('collapsable.update', { user: user.id }), {
        ...{ id: props.name},
        ...data
    })
}
</script>
