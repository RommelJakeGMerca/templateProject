<template>
    <AdminLayout>
        <div class="h-full overflow-y-auto">
            <Statistics
                :branches="branches"
                :salesChartData="salesChartData"
                :transactionsChartData="transactionsChartData"
                :salesTotals="salesTotals"
            />
        </div>
    </AdminLayout>
</template>

<script setup>
    import AdminLayout from '../Components/AdminLayout.vue';
    import Statistics from './Components/Statistics.vue';
    import { onMounted } from 'vue';
    import { initFlowbite } from 'flowbite';

    defineProps({
        branches: Array,
        salesChartData: Object,
        transactionsChartData: Object,
        salesTotals: Object
    });

    onMounted(() => {
        initFlowbite();
    })
</script>
