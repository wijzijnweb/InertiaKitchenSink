<template>
    <DocHeader>Forms</DocHeader>

    <form class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
        <div class="grid grid-cols-1 gap-6">
            <label class="block">
                <span class="text-gray-700">Input (text)</span>
                <Input
                    type="text"
                    class="form-input mt-1 block w-full"
                    placeholder="john@example.com"
                />
            </label>
            <label class="block">
                <span class="text-gray-700">Input (email)</span>
                <Input
                    type="email"
                    class="form-input mt-1 block w-full"
                    placeholder="john@example.com"
                />
            </label>
            <label class="block">
                <span class="text-gray-700">Input (email, multiple)</span>
                <Input
                    type="email"
                    multiple
                    class="form-input mt-1 block w-full"
                    placeholder="john@example.com"
                />
            </label>
            <label class="block">
                <span class="text-gray-700">Input (password)</span>
                <Input
                    type="password"
                    class="form-input mt-1 block w-full"
                    placeholder="john@example.com"
                />
            </label>
            <label class="block">
                <span class="text-gray-700">Datepicker</span>
                <br>
                <code class="text-xs italic">ddev npm install vue-flatpickr-component</code>

                <Datepicker></Datepicker>
            </label>
            <label class="block">
                <span class="text-gray-700">Datepicker (inline)</span>
                <br>
                <code class="text-xs italic">ddev npm install vue-flatpickr-component</code>

                <Datepicker :inline="true"></Datepicker>
            </label>
            <label class="block">
                <span class="text-gray-700">Input (datetime)</span>

                <Datepicker date-format="d-m-Y H:i" :time="true"></Datepicker>
            </label>

            <label class="block">
                <span class="text-gray-700">Input (number)</span>
                <Input type="number" class="form-input mt-1 block w-full" />
            </label>
            <label class="block">
                <span class="text-gray-700">Input (search)</span>
                <Input type="search" class="form-input mt-1 block w-full" />
            </label>
        </div>
        <div class="grid grid-cols-1 gap-6">
            <label class="block">
                <span class="text-gray-700">Input (tel)</span>
                <Input
                    type="tel"
                    multiple
                    class="form-input mt-1 block w-full"
                    placeholder="06-12345678"
                />
            </label>
            <label class="block">
                <span class="text-gray-700">Input (url)</span>
                <Input
                    type="url"
                    multiple
                    class="form-input mt-1 block w-full"
                    placeholder="john@example.com"
                />
            </label>


            <label class="block">
                <span class="text-gray-700">Vue Select</span><br>
                <code class="text-xs italic">ddev npm install vue-select@beta</code>

                <VueSelect :taggable="true" :options="['Wij', 'zijn', 'WEB']"></VueSelect>

            </label>
            <label class="block">
                <span class="text-gray-700">Select</span>

                <Select :options="['Wij', 'zijn', 'WEB']" />
            </label>

            <label class="block">
                <span class="text-gray-700">Select (multiple)</span>
                <Select :options="['Wij', 'zijn', 'WEB']" multiple />
            </label>
            <label class="block">
                <span class="text-gray-700">Textarea</span>
                <Textarea
                    rows="3"
                    placeholder="Enter some long form content." />
            </label>
            <fieldset class="block">
                <legend class="text-gray-700">Checkboxes</legend>
                <div class="mt-2">
                    <div>
                        <label class="inline-flex items-center">
                            <Checkbox value="option-1"></Checkbox>
                            <span class="ml-2">Option 1</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <Checkbox value="option-2"></Checkbox>
                            <span class="ml-2">Option 2</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <Checkbox value="option-3"></Checkbox>
                            <span class="ml-2">Option 3</span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="block">
                <legend class="text-gray-700">Radio Buttons</legend>
                <div class="mt-2">
                    <div>
                        <label class="inline-flex items-center">
                            <RadioButton name="test" />
                            <span class="ml-2">Option 1</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <RadioButton name="test" />
                            <span class="ml-2">Option 2</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <RadioButton name="test" />
                            <span class="ml-2">Option 3</span>
                        </label>
                    </div>
                    <div>
                        <label class="block">
                            <span class="text-gray-700">Input (file)</span>
                            <input type="file" class="mt-1 block w-full" />
                        </label>
                    </div>
                    <div>
                        <label class="block">
                            <span class="text-gray-700">Input (file, multiple)</span>
                            <input type="file" multiple class="mt-1 block w-full" />
                        </label>
                    </div>
                </div>
            </fieldset>
        </div>
    </form>
</template>

<script setup>
import Checkbox from "@/Components/Forms/Checkbox.vue";
import Datepicker from "@/Components/Forms/Datepicker.vue";
import Input from "@/Components/Forms/Input.vue";
import RadioButton from "@/Components/Forms/RadioButton.vue";
import Select from "@/Components/Forms/Select.vue";
import Textarea from "@/Components/Forms/Textarea.vue";
import DocHeader from "./DocHeader.vue";
</script>
