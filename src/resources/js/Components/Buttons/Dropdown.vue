<script setup>
import {computed, onMounted, onUnmounted, ref} from 'vue';

const props = defineProps({
    align: {
        type: String,
        default: 'right',
    },
    width: {
        type: String,
        default: '48',
    },
    contentClasses: {
        type: Array,
        default: () => ['py-1', 'bg-white'],
    },
});

let open = ref(false);

const closeOnEscape = (e) => {
    if (open.value && e.key === 'Escape') {
        open.value = false;
    }
};


const isMounted = ref(false)
onMounted(() => {
    isMounted.value = true
    document.addEventListener('keydown', closeOnEscape)
});
onUnmounted(() => document.removeEventListener('keydown', closeOnEscape));

const widthClass = computed(() => {
    return {
        '48': 'w-48',
    }[props.width.toString()];
});

const alignmentClasses = computed(() => {
    if (props.align === 'left') {
        return 'origin-top-left left-0';
    }

    if (props.align === 'right') {
        return 'origin-top-right right-0';
    }

    return 'origin-top';
});

const opener = ref(null)

const offsetTop = computed(() => {
    return (opener.value ? opener.value.getBoundingClientRect().top : 0) + (opener.value ? opener.value.offsetHeight : 0)
})

const offsetRight = computed(() => {
    return window.document.body.clientWidth - (opener.value ? (opener.value.getBoundingClientRect().left + opener.value.clientWidth) : 0)
})
</script>

<template>
    <div class="relative inline-block text-left">
        <div @click="open = ! open" ref="opener">
            <slot name="trigger"/>
        </div>

        <!-- Full Screen Dropdown Overlay -->
        <div v-show="open" class="fixed inset-0 z-2" @click="open = false"/>

        <teleport to="#content" v-if="isMounted">
        <transition
            enter-active-class="transition ease-out duration-200"
            enter-from-class="transform opacity-0 scale-95"
            enter-to-class="transform opacity-100 scale-100"
            leave-active-class="transition ease-in duration-75"
            leave-from-class="transform opacity-100 scale-100"
            leave-to-class="transform opacity-0 scale-95"
        >
            <div
                v-show="open"
                :class="[widthClass, alignmentClasses]"
                class="absolute z-9 mt-2 rounded-md shadow-lg"

                :style="{
                    top: offsetTop + 'px',
                    right: offsetRight + 'px'
                }"

                style="display: none;"
                @click="open = false"
            >
                <div :class="contentClasses" class="rounded-md ring-1 ring-black ring-opacity-5">
                    <slot name="content"/>
                </div>
            </div>
        </transition>
        </teleport>
    </div>
</template>
