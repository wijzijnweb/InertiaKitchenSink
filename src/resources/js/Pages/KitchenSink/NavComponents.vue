<template>
    <DocHeader>Navigations</DocHeader>

    <b>Sidebar</b><br>
    <hr class="my-4" />
    <nav class="flex-1 px-2 pb-4 space-y-1 w-[200px]">
        <NavLink class="font-medium" icon="fa-home">
            Dashboard
        </NavLink>

        <NavLink class="font-medium" icon="fa-list" :dropdown="true">
            Orders

            <template #sub>
                <ul>
                    <li>
                        <NavSubLink :count="34">
                            Concept
                        </NavSubLink>
                    </li>
                    <li>
                        <NavSubLink :count="87">
                            Incompleet
                        </NavSubLink>
                    </li>
                    <li>
                        <NavSubLink :count="87">
                            Compleet
                        </NavSubLink>
                    </li>
                    <li>
                        <NavSubLink :count="87">
                            Ingepland
                        </NavSubLink>
                    </li>
                    <li>
                        <NavSubLink :count="87">
                            Wijzigingsvoorstellen
                        </NavSubLink>
                    </li>
                </ul>
            </template>
        </NavLink>

        <NavLink class="font-medium" icon="fa-location-dot">
            Ritplanning
        </NavLink>

        <NavLink class="font-medium" icon="fa-user">
            Debiteuren
        </NavLink>
    </nav>

    <b>Tabs</b><br>
    <hr class="my-4" />
    <Tabs default="tab1">
        <template #tabs>
            <TabButton name="tab1">
                Tab 1
            </TabButton>
            <TabButton name="tab2">
                Tab 2
            </TabButton>
            <TabButton name="tab3">
                Tab 3
            </TabButton>
        </template>

        <template #default>
            <TabContent name="tab1">
                <Card>
                    Tab 1
                </Card>
            </TabContent>
            <TabContent name="tab2">
                <Card>
                    Tab 2
                </Card>
            </TabContent>
            <TabContent name="tab3">
                <Card>
                    Tab 3
                </Card>
            </TabContent>
        </template>

    </Tabs>
</template>


<script setup>
import Card from "@/Components/Card.vue";
import NavLink from "@/Components/NavLink.vue";
import NavSubLink from "@/Components/NavSubLink.vue";
import TabButton from "@/Components/Tabs/TabButton.vue";
import TabContent from "@/Components/Tabs/TabContent.vue";
import Tabs from "@/Components/Tabs/Tabs.vue";
import DocHeader from "./DocHeader.vue";
</script>
