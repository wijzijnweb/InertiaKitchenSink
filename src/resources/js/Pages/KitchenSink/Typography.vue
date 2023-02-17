<template>
    <div>
        <DocHeader>Typography</DocHeader>

        <h1 class="text-3xl">Wij zijn WEB</h1>
        <h2 class="text-2xl">Wij zijn WEB</h2>
        <h3 class="text-xl">Wij zijn WEB</h3>
        <h4 class="text-lg">Wij zijn WEB</h4>
        <h5 class="text-md">Wij zijn WEB</h5>
        <h6 class="text-sm">Wij zijn WEB</h6>

        <Spacer />

        <p class="text-sm">
            <b>Exapps</b> is een bedrijf voor <i>applicatieontwikkeling</i> dat zich bevindt in Zevenaar.
            Het bedrijf richt zich op het ontwikkelen van mobiele en webapplicaties voor zowel kleine als
            grote organisaties. Met een team van ervaren ontwikkelaars, designers en projectmanagers, is
            Exapps in staat om aan de specifieke eisen van elke klant te voldoen en een gebruiksvriendelijke
            en efficiënte applicatie te creëren.
        </p>

        <Spacer />

        <ul class="list-disc">
            <li>Applicatie ontwikkeling</li>
            <li>Laravel</li>
            <li>Vue</li>
            <li>Inertia</li>
        </ul>

    </div>
</template>

<script setup>
import DocHeader from "./DocHeader.vue";
import Spacer from "./Spacer.vue";
</script>
