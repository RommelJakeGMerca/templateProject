<script setup>
import UserLayouts from './Components/UserLayouts.vue'
import Newsletter from './Newsletter.vue';
import Services from './Services.vue';

defineProps({
    orders: Array
})

</script>
<template>
    <UserLayouts>
        <Services></Services>
        <Newsletter></Newsletter>
    </UserLayouts>
</template>