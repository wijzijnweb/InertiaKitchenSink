<template>
    <div class="col-span-6 xl:col-span-4">
        <FormField v-model="address.code"
                   :error="error('code')"
                   placeholder="Adrescode"
                   :required="true">

            <VueSelect
                v-model="address.code"
                label="code"
                :taggable="true"
                :creatable="true"
                @search="searchAddress"
                @option:selected="selected"
                :options="searchResult"
                :reduce="customer => customer.id">
                <template v-slot:no-options="{ search, searching }">
                    <template v-if="searching">
                        Geen resultaten voor <em>{{ search }}</em>.
                    </template>
                    <em v-else style="opacity: 0.5">Zoek een adres of voer een code nieuwe code in.</em>
                </template>
            </VueSelect>
        </FormField>
    </div>

    <div class="col-span-6 xl:col-span-4">
        <FormField v-model="address.street"
                   :disabled="disabled"
                   :error="error('street')"
                   placeholder="Straat"
                   :required="true" />
    </div>

    <div class="col-span-6 xl:col-span-3">
        <FormField v-model="address.number"
                   :disabled="disabled"
                   :error="error('number')"
                   placeholder="Huisnummer"
                   :required="true" />
    </div>

    <div class="col-span-6 xl:col-span-4">
        <FormField v-model="address.zipcode"
                   :disabled="disabled"
                   :error="error('zipcode')"
                   placeholder="Postcode"
                   :required="true" />
    </div>

    <div class="col-span-6 xl:col-span-7">
        <FormField v-model="address.city"
                   :disabled="disabled"
                   :error="error('city')"
                   placeholder="Plaats"
                   :required="true"
        />
    </div>
</template>

<script setup>
import FormField from "@/Components/Forms/FormField.vue";
import {computed, ref} from "vue";

const props = defineProps({
    modelValue: Object,
    form: Object,
    addressName: String
})

const address = computed(() => {
    return props.form[props.addressName] ? props.form[props.addressName] : {}
})

const disabled = computed(() => {
    return address.value?.id
})

const searchResult = ref([])

function error(key) {
    return props.form.errors ? props.form.errors[props.addressName + '.' + key] : null
}

function searchAddress(text) {
    if(text) {
        axios.get(route('address.search'), {
            params: {
                code: text
            }
        }).then((res) => {
            searchResult.value = res.data
        })
    } else {
        searchResult.value = []
    }
}

function selected(value) {
    const selectedResult = searchResult.value.filter((res) => res.code === value?.code)[0]
    if(selectedResult) {
        props.form[props.addressName] = selectedResult
    } else {
        props.form[props.addressName].id = null
        props.form[props.addressName].code = value
    }
}
</script>
