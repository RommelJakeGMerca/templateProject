<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Header from './Header.vue';
import Footer from './Footer.vue';
import Hero from './Hero.vue';

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})

</script>
<template>
    <div class="bg-cover bg-center bg-fixed" style="background-image: url('https://images.pexels.com/photos/3944406/pexels-photo-3944406.jpeg');">
        <Header></Header>
        <Hero></Hero>
    </div>
    <slot></slot>
    <Footer></Footer>
</template>
