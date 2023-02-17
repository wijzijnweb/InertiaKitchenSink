<template>
    <nav class="text-base lg:text-sm w-64 pr-8 xl:w-72 xl:pr-16">
        <ul class="space-y-9" role="list">
            <li>
                <h2 class="font-display font-medium text-slate-900 dark:text-white">Typography</h2>
                <ul class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200"
                    role="list">
                    <li class="relative">
                        <a class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-sky-500 before:bg-sky-500"
                           href="/"
                           @click.prevent="$emit('navigate', 'Typography')">
                            Headings
                        </a>
                    </li>
                    <li class="relative">
                        <a
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/"
                            @click.prevent="$emit('navigate', 'Typography')">
                            Content
                        </a>
                    </li>
                </ul>
            </li>
            <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Forms</h2>
                <ul class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200"
                    role="list">
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Form')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Inputs
                        </a>
                    </li>
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Form')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/docs/predicting-user-behavior">Selects
                        </a>
                    </li>
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Form')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/docs/basics-of-time-travel">Textarea
                        </a>
                    </li>
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Form')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/docs/the-butterfly-effect">Datepicker
                        </a>
                    </li>
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Form')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/docs/introduction-to-string-theory">Errors
                        </a>
                    </li>
                </ul>
            </li>
            <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Buttons</h2>
                <ul class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200"
                    role="list">
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Buttons')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Normal buttons
                        </a>
                    </li>
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Buttons')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Dropdown buttons
                        </a>
                    </li>
                </ul>
            </li>
            <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Modals</h2>
                <ul class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200"
                    role="list">
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Modals')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Default Modal
                        </a>
                    </li>
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Modals')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Confirm Modal
                        </a>
                    </li>
                </ul>
            </li>
            <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Cards</h2>
                <ul class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200"
                    role="list">
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Cards')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Default cards
                        </a>
                    </li>
                </ul>
            </li>

            <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Nav</h2>
                <ul class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200"
                    role="list">
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'NavComponents')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Navbar
                        </a>
                    </li>
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'NavComponents')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Sidebar
                        </a>
                    </li>
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'NavComponents')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Tabs
                        </a>
                    </li>
                </ul>
            </li>

            <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Tables</h2>
                <ul class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200"
                    role="list">
                    <li class="relative">
                        <a
                            @click.prevent="$emit('navigate', 'Tables')"
                            class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                            href="/">Tables
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</template>

<script setup>
defineEmits(['navigate'])
</script>
