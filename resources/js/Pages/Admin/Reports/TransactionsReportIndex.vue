<template>
    <AdminLayout>
        <div class="h-full overflow-y-auto">
            <TransactionsReport :transactionsReport="transactionsReport" :branches="branches" />
        </div>
    </AdminLayout>
</template>

<script setup>
    import AdminLayout from '../Components/AdminLayout.vue';
    import TransactionsReport from './Components/TransactionsReport.vue';
    import { onMounted } from 'vue';
    import { initFlowbite } from 'flowbite';

    defineProps({
        transactionsReport: Object,
        branches: Array
    });

    onMounted(() => {
        initFlowbite();
    })
</script>
