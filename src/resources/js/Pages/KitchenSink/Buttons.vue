<template>
    <DocHeader>Buttons</DocHeader>

    <form class="flex gap-2">
        <Button>Wij zijn WEB</Button>
        <Button variant="success">Wij zijn WEB</Button>
        <Button variant="danger">Wij zijn WEB</Button>
        <Button variant="info">Wij zijn WEB</Button>
        <Button variant="warning">Wij zijn WEB</Button>
    </form>

    <form class="flex gap-2 mt-4">
        <Button>
            <template #icon>
                <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z"/>
                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z"/>
                </svg>
            </template>
            Wij zijn WEB
        </Button>
        <Button color="success">
            <template #icon>
                <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z"/>
                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z"/>
                </svg>
            </template>
            Wij zijn WEB
        </Button>
        <Button color="danger">
            <template #icon>
                <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z"/>
                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z"/>
                </svg>
            </template>
            Wij zijn WEB
        </Button>
        <Button color="info">
            <template #icon>
                <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z"/>
                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z"/>
                </svg>
            </template>
            Wij zijn WEB
        </Button>
        <Button color="warning">
            <template #icon>
                <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z"/>
                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z"/>
                </svg>
            </template>
            Wij zijn WEB
        </Button>
    </form>


    <DocHeader class="mt-6">Dropdown buttons</DocHeader>

    <Dropdown>
        <template #trigger>
            <Button variant="secondary">Dropdown</Button>
        </template>

        <template #content>
            <DropdownLink>Test</DropdownLink>
            <DropdownLink>Test</DropdownLink>
            <DropdownLink>Test</DropdownLink>
            <DropdownLink>Test</DropdownLink>
            <DropdownLink>Test</DropdownLink>
        </template>
    </Dropdown>

</template>
<script setup>
import Button from "../../Components/Buttons/Button.vue";
import Dropdown from "../../Components/Buttons/Dropdown.vue";
import DropdownLink from "../../Components/Buttons/DropdownLink.vue";
import DocHeader from "./DocHeader.vue";</script>
