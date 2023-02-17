<template>
    <AppLayout title="Kitchen Sink">
        <div class="relative mx-auto flex max-w-8xl justify-center sm:px-2 lg:px-8 xl:px-12 -mt-10">
            <div class="hidden lg:relative lg:block lg:flex-none">
                <div class="absolute inset-y-0 right-0 w-[50vw] bg-slate-50 dark:hidden"></div>
                <div class="absolute top-16 bottom-0 right-0 hidden h-12 w-px bg-gradient-to-t from-slate-800 dark:block"></div>
                <div class="absolute top-28 bottom-0 right-0 hidden w-px bg-slate-800 dark:block"></div>
                <div class="sticky top-[4.5rem] -ml-0.5 h-[calc(100vh-4.5rem)] overflow-y-auto overflow-x-hidden py-16 pl-0.5">

                    <Nav @navigate="active = $event"></Nav>
                </div>
            </div>
            <div class="min-w-0 max-w-2xl flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
                <Typography v-if="active === 'Typography'"></Typography>
                <Form v-if="active === 'Form'"></Form>
                <Buttons v-if="active === 'Buttons'"></Buttons>
                <Modals v-if="active === 'Modals'"></Modals>
                <Cards v-if="active === 'Cards'"></Cards>
                <NavComponents v-if="active === 'NavComponents'"></NavComponents>
                <Tables v-if="active === 'Tables'"></Tables>
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import Nav from "./Nav.vue";
import AppLayout from "../../Layouts/AppLayout.vue";
import Typography from "./Typography.vue";
import Form from "./Form.vue";
import Buttons from "./Buttons.vue";
import Modals from "./Modals.vue";
import Cards from "./Cards.vue";
import NavComponents from "./NavComponents.vue";
import Tables from "./Tables.vue";
import {ref} from "vue";

const active = ref('Typography')
</script>
