<template>
    <DocHeader>Tables</DocHeader>

    <Table name="items">
        <template #thead>
            <TableHeadColumn>
                NR
            </TableHeadColumn>

            <TableHeadColumn>
                Column 2
            </TableHeadColumn>

            <TableHeadColumn />
        </template>

        <TableRow v-for="i in 20" class="odd:bg-gray-200">
            <TableColumn>
                {{ Math.random() }}
            </TableColumn>

            <TableColumn>
                {{ Math.random() }}
            </TableColumn>

            <TableColumn class="py-1.5 px-4 h-10 text-base text-primary text-right space-x-3">
                <button class="group">
                    <i class="text-gray-500 transition-colors fa-regular fa-pen group-hover:text-gray-900"></i>
                </button>
                <button class="group">
                    <i class="text-gray-500 transition-colors fa-regular fa-trash-alt group-hover:text-gray-900"></i>
                </button>
            </TableColumn>
        </TableRow>
    </Table>
</template>


<script setup>
import Table from "@/Components/Table/Table.vue";
import TableColumn from "@/Components/Table/TableColumn.vue";
import TableHeadColumn from "@/Components/Table/TableHeadColumn.vue";
import TableRow from "@/Components/Table/TableRow.vue";
import DocHeader from "./DocHeader.vue";
</script>
