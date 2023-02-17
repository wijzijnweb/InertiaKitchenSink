<script setup>
import {computed, ref} from "vue";
import Button from "./Buttons/Button.vue";
import Modal from './Modal.vue';

const emit = defineEmits(['close', 'confirm']);

const props = defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    maxWidth: {
        type: String,
        default: '2xl',
    },
    closeable: {
        type: Boolean,
        default: true,
    },
    confirmBtn: {
        type: Boolean,
        default: true,
    },
    cancelBtn: {
        type: Boolean,
        default: true,
    },
    confirmText: {
        type: String,
        default: 'Opslaan',
    },
    cancelText: {
        type: String,
        default: 'Annuleer',
    }
});

const isOpen = ref(false)

const close = () => {
    isOpen.value = false
    emit('close');
};
</script>

<template>
    <div @click="isOpen = ! isOpen">
        <slot name="trigger"></slot>
    </div>

    <Modal
        :closeable="closeable"
        :max-width="maxWidth"
        :show="isOpen"
        @close="close">

        <div class="mt-3 text-center sm:mt-5">
            <h3 id="modal-title" class="text-lg font-medium leading-6 text-gray-900">
                <slot name="title"/>
            </h3>
            <div class="mt-2">
                <slot name="content"/>
            </div>
        </div>

        <div class="mt-5 flex justify-center gap-3">
            <Button v-if="confirmBtn" @click.prevent="$emit('confirm', close)" color="success">
                {{ confirmText }}
            </Button>
            <Button v-if="cancelBtn" @click.prevent="close" color="gray" type="button">
                {{ cancelText }}
            </Button>
        </div>

    </Modal>
</template>
