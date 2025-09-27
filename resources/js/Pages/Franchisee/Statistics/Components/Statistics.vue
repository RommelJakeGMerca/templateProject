<template>
    <section class="bg-gray-50 dark:bg-gray-900 h-full p-3 sm:p-5 overflow-y-auto">
        <div class="mt-11 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-11 items-center">
            <div class="group relative rounded-lg dark:bg-white dark:border-white bg-white border border-gray-100 shadow-sm">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <h6 class="mr-11 text-xl font-extrabold text-emerald-900 dark:text-white">
                            My Statistics
                        </h6>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <h6 class="mr-2 text-xl font-medium text-emerald-900 dark:text-white">
                            Filters
                        </h6>
                        <select id="month" v-model="selectedMonth"
                            class="w-full text-sm text-gray-900 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            style="min-width: 200px;">
                            <option value="" disabled>Month</option>
                            <option v-for="(month, index) in months" :key="index" :value="month">{{ month }}</option>
                        </select>
                        <select id="year" v-model="selectedYear"
                            class="w-full text-sm text-gray-900 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            style="min-width: 200px;">
                            <option value="" disabled>
                                Year
                            </option>
                            <option v-for="year in years" :key="year" :value="year">{{ year }}</option>
                        </select>
                        <button type="button" :disabled="isLoading" @click="handleFilters"
                            class="flex items-center justify-center space-x-2 text-white bg-emerald-900 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                            <span>{{ isLoading ? 'Disabled...' : 'Generate' }}</span>
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>
                        <button type="button" :disabled="isLoading" @click="refreshSalesChart"
                            class="flex items-center justify-center space-x-2 text-white bg-emerald-900 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                            <span>{{ isLoading ? 'Disabled...' : 'Refresh' }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </button>
                    </div>
                    <!-- Button -->
                </div>
            </div>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-11 items-center">
            <SalesChart :branches="branches" :salesChartData="salesChartData" />
            <TransactionsChart :branches="branches" :transactionsChartData="transactionsChartData" />
            <SalesChartSummary :salesTotals="salesTotals"/>
        </div>
    </section>
</template>

<script setup>
    import { Link, router, usePage } from '@inertiajs/vue3';
    import { ref, onMounted, nextTick, watch } from 'vue';
    import SalesChart from './SalesChart.vue';
    import TransactionsChart from './TransactionsChart.vue';
    import SalesChartSummary from './SalesChartSummary.vue';

    defineProps({
        branches: Array,
        salesChartData: Object,
        transactionsChartData: Object,
        salesTotals: Object
    });

    const selectedMonth           = ref('');
    const selectedYear            = ref('');
    const isLoading               = ref(false);
    const months                  = [
                                        'January', 'February', 'March', 'April', 'May', 'June',
                                        'July', 'August', 'September', 'October', 'November', 'December'
                                    ];
    const years                   = Array.from({ length: 10 }, (_, i) => new Date().getFullYear() - i);

    const handleFilters = async () => {
        isLoading.value = true;

        if (selectedMonth.value == '' && selectedYear.value == '') {
            isLoading.value = false;
            Swal.fire({
                toast: true,
                icon: "warning",
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                title: "Please select a filter first",
            });
            return;
        }

        if (selectedMonth && selectedYear) {
            router.get(route('franchisee.statistics.index'), {
                    month : selectedMonth.value,
                    year : selectedYear.value,
                }, {
                    preserveState: true,
                }, isLoading.value = false
            );
        }
    };

    const refreshSalesChart = () => {
        selectedMonth.value = '';
        selectedYear.value  = '';

        router.visit(route('franchisee.statistics.index'), {
            method: 'get',
            data: {
            },
            preserveState: true,
            replace: true,
            onSuccess: () => {
                isLoading.value = false;
                Swal.fire({
                    toast: true,
                    icon: "success",
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    title: "Data refreshed!",
                });
            },
            onFinish: () => {
                isLoading.value = false;
            },
        });
    };
</script>
