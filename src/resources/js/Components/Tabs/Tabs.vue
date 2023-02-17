<template>
    <div class="flex flex-col">
        <div class="mb-5 inline-flex flex-wrap items-start gap-3 lg:items-center">
            <slot name="tabs" :active-tab="activeTab">
                <TabButton v-model="activeTab" :name="name" v-for="(text, name) in tabs" :key="name">
                    {{ text }}
                </TabButton>
            </slot>
        </div>

        <slot :active-tab="activeTab" />
    </div>
</template>

<script setup>
    import TabButton from "@/Components/Tabs/TabButton.vue";
    import {ref} from "vue";

    const props = defineProps({
        tabs: Object,
        default: String
    })

    const activeTab = ref(props.default)
</script>
