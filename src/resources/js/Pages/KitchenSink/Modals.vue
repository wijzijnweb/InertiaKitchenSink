<template>
    <DocHeader>Modals</DocHeader>

    <div class="flex gap-6">
        <Modal>
            <template #trigger>
                <Button>Open</Button>
            </template>

            Simple Modal
        </Modal>

        <DialogModal>
            <template #trigger>
                <Button>Dialog Modal</Button>
            </template>

            <template #title>
                You sure?
            </template>

            <template #content>
                Some text comes here...
            </template>
        </DialogModal>
    </div>


    <div class="mt-6">
        <hr />
        <code class="text-xs italic my-2 block">ddev npm install sweetalert2</code>

        <div class="flex gap-6">
            <Button @click="deleteSwal" color="danger">
                Delete (SweetAlert)
            </Button>

            <Button @click="infoSwal" color="info">
                Info (SweetAlert)
            </Button>

            <Button @click="warningSwal" color="warning">
                Warning (SweetAlert)
            </Button>

            <Button @click="successSwal" color="success">
                Success (SweetAlert)
            </Button>
        </div>
    </div>
</template>


<script setup>
import Swal from "sweetalert2";
import Button from "../../Components/Buttons/Button.vue";
import DialogModal from "../../Components/DialogModal.vue";
import Modal from "../../Components/Modal.vue";
import DocHeader from "./DocHeader.vue";

async function deleteSwal() {
    return await Swal.fire({
        text: 'Weet je zeker dat je dit item wilt verwijderen?',
        icon: 'error',
        confirmButtonColor: 'rgb(var(--primary-color))',
        confirmButtonText: 'Ja',
        showCancelButton: true,
        cancelButtonText: 'Nee',
    })
}

async function infoSwal() {
    return await Swal.fire({
        text: 'Good to know',
        icon: 'info',
    })
}

async function warningSwal() {
    return await Swal.fire({
        text: 'Watch out!',
        icon: 'warning',
    })
}

async function successSwal() {
    return await Swal.fire({
        text: 'Well done',
        icon: 'success',
    })
}

</script>
