<template>
    <AdminLayout>
        <div class="h-full overflow-y-auto">
            <SalesReport :salesReports="salesReports" :branches="branches" />
        </div>
    </AdminLayout>
</template>

<script setup>
    import AdminLayout from '../Components/AdminLayout.vue';
    import SalesReport from './Components/SalesReport.vue';
    import { onMounted } from 'vue';
    import { initFlowbite } from 'flowbite';

    defineProps({
        salesReports: Object,
        branches: Array,
    });

    onMounted(() => {
        initFlowbite();
    })
</script>
