<template>
    <div>
        <div class="mx-auto flex flex-col justify-between gap-3 xl:flex-row mb-2">

            <div class="flex flex-col 2xl:flex-row 2xl:items-center 2xl:gap-5">
                <h1 class="text-2xl font-semibold text-gray-900">{{ title }}</h1>
                <div class="flex flex-wrap gap-3 xl:items-center" v-if="dataset">
                    <span class="w-full text-sm font-medium text-gray-700 xl:w-auto">Opgeslagen filters</span>

                    <Button variant="secondary"
                            class="text-base focus:ring-0"
                            :class="{ 'border-primary border-2': filter.name === activeFilter?.name }"
                            v-for="(filter, index) in filters"
                            @click.prevent="useFilter(filter)">

                        <template #icon-suffix>
                            <i class="fa-regular fa-trash-can -mr-0.5 ml-2" @click.stop.prevent="removeFilter(filter, index)"></i>
                        </template>

                        {{ filter.name }}
                    </Button>

                    <DialogModal @confirm="saveFilter">
                        <template #trigger>
                            <Button class="text-base">Huidig filter opslaan</Button>
                        </template>

                        <template #title>
                            Geef een nieuwe naam op voor dit filter of gebruik een zelfde naam om een bestaand filter te overschrijven.
                        </template>

                        <template #content>
                            <Input placeholder="Filter naam" v-model="newFilterName" />
                        </template>
                    </DialogModal>
                </div>
            </div>
            <div class="flex items-end gap-3">
                <slot name="top-right"></slot>
            </div>
        </div>

        <Card>
            <div class="overflow-x-auto rounded-lg border border-gray-200 shadow">
            <table class="w-max min-w-full">
                <thead>
                    <slot name="thead">
                        <TableRow class="bg-gray-50">
                            <TableHeadColumn v-for="column in filteredColumns">
                                {{ column.name }}
                            </TableHeadColumn>
                            <th class="sticky bg-inherit right-0 z-1 p-3 text-right" v-if="visibleColumns.length">

                            <Dropdown>
                                <template #trigger>
                                    <button
                                        class="h-7 w-7 rounded-md border border-gray-300 bg-white text-base leading-7 transition-colors text-primary hover:bg-gray-100">
                                        <i class="fa-regular fa-arrow-down-arrow-up"></i>
                                    </button>
                                </template>

                                <template #content>
                                    <Draggable class="z-1" :list="columns"  item-key="db_name" @end="updateSorting">
                                        <template #item="{element}">
                                            <DropdownLink @click.stop as="label" :key="element.db_name">
                                                <input type="checkbox" @change="updateVisible" v-model="visibleColumns" :value="element.db_name" /> {{ element.filter_label }}
                                            </DropdownLink>
                                        </template>
                                    </Draggable>
                                </template>
                            </Dropdown>
                            </th>
                        </TableRow>

                        <TableRow>
                            <TableSearchColumn
                                v-for="(column, db_name) in filteredColumns"
                                v-model="search[column.db_name]"
                                :column="column"
                                :key="db_name" />
                            <TableSearchColumn/>
                        </TableRow>
                    </slot>
                </thead>

                <tbody class="divide-y divide-gray-200 odd:bg-gray-200" ref="bodySlot">
                    <slot :filtered-columns="filteredColumns"></slot>
                </tbody>
            </table>
        </div>
        </Card>
    </div>
</template>

<script setup>
import Card from "@/Components/Card.vue";
import {usePage} from "@inertiajs/inertia-vue3";
import axios from "axios";
import {computed, ref, watch} from "vue";
import useAlert from "../../Shared/useAlert.js";
import Button from "@/Components/Buttons/Button.vue";
import DialogModal from "@/Components/DialogModal.vue";
import Dropdown from "@/Components/Buttons/Dropdown.vue";
import DropdownLink from "@/Components/Buttons/DropdownLink.vue";
import Input from "@/Components/Forms/Input.vue";
import TableHeadColumn from "./TableHeadColumn.vue";
import TableRow from "./TableRow.vue";
import TableSearchColumn from "./TableSearchColumn.vue";
import Draggable from 'vuedraggable'

const emit = defineEmits(['searched'])

const props = defineProps({
    title: String,
    name: {
        type: String,
        required: true
    }
})

const user = usePage().props.value.user
const tableSettings = computed(() => {
    return user.table_sorting.filter((sort) => {
        return sort.alias === props.name
    })[0]
})

const activeFilter = ref(null)
const search = ref({})
const newFilterName = ref('')
const filters = ref(user.table_filters ? user.table_filters.filter((sort) => {
    return sort.alias === props.name
}) : [])

const dataset = usePage().props.value.datasets[props.name]?.columns;

const orderColumns = ref(dataset ? dataset : [])

const visibleColumns = ref(tableSettings.value
    ? tableSettings.value.visible
    : orderColumns.value.map((o) => o.db_name))

const sorting = ref(tableSettings.value
    ? tableSettings.value.sorting
    : [])

const columns = ref(
    orderColumns.value.map((column) => {
        column.order = sorting.value.indexOf(column.db_name)
        return column
    }).sort((a, b) => a.order - b.order)
)

const filteredColumns = computed(() => {
    return columns.value.filter((column) => {
        return visibleColumns.value.indexOf(column.db_name) !== -1
    })
})

watch(search, () => {
    emit('searched', search.value)
})

function updateSorting() {
    sorting.value = columns.value.map((v) => v.db_name)
    updateTableColumns()
}

function updateVisible() {
    updateTableColumns()
}

function updateTableColumns() {
    axios.post(route('tables.columns.update', {
        user: user.id
    }), {
        sorting: sorting.value,
        visible: visibleColumns.value,
        alias: props.name
    })
}

function saveFilter(close) {
    axios.post(route('tables.filter.store', {
        user: user.id
    }), {
        name: newFilterName.value,
        sorting: sorting.value,
        visible: visibleColumns.value,
        search: search.value,
        alias: props.name
    }).then((res) => {
        let exists = false
        filters.value.forEach((filter, index) => {
            if(parseInt(filter.id) === parseInt(res.data.id)) {
                exists = index
            }
        })

        if(exists === false) {
            filters.value.push(res.data)
        } else {
            filters.value[exists] = res.data
        }
        close()
    })
}

function useFilter(filter) {
    activeFilter.value = filter
    search.value = filter.search
    sorting.value = filter.sorting
    visibleColumns.value = filter.visible

    newFilterName.value = filter.name
}

async function removeFilter(filter, index) {
    const { remove } = useAlert()

    const res = await remove()

    if(res.isConfirmed) {
        axios.delete(route('tables.filter.destroy', {
            filter: filter.id
        })).then(() => {
            filters.value.splice(index, 1)
        })
    }

}
</script>
