<template>
    <DocHeader>Cards</DocHeader>

    <Card title="This is a title">
        Some card info comes here
    </Card>

    <Card title="Another card" class="mt-4">
        Some card info comes here
    </Card>

    <div class="flex mt-6 gap-5">
        <Card title="This is a title">
            Some card info comes here
        </Card>

        <Card title="Another card">
            Some card info comes here
        </Card>
    </div>
</template>
<script setup>
import Card from "@/Components/Card.vue";
import DocHeader from "./DocHeader.vue";
</script>
