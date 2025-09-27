<template>
    <div
        class="group relative rounded-lg dark:bg-white dark:border-white p-1 bg-white border border-gray-100 shadow-sm"
        style="min-height: 500px;">
        <h5 class="text-center text-xl font-bold leading-none text-emerald-900 dark:text-white mt-4 mb-4">
            Transactions Count Per Branch
        </h5>
        <div>
            <div class="flex justify-center items-center mb-2" id="transactionStatuses">
                <div class="flex items-center me-4">
                    <input id="pending" type="checkbox" value="1"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="pending" class="ms-2 text-xs font-medium text-blue-700 dark:text-gray-300">
                        PENDING
                    </label>
                </div>
                <div class="flex items-center me-4">
                    <input id="ongoing" type="checkbox" value="2"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="ongoing" class="ms-2 text-xs font-medium text-yellow-500 dark:text-gray-300">
                        ONGOING
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div class="flex justify-center items-center mb-2" id="transactionStatuses">
                <div class="flex items-center me-4">
                    <input id="cancelled" type="checkbox" value="3"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="cancelled" class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">
                        CANCELLED
                    </label>
                </div>
                <div class="flex items-center me-4 mb-2">
                    <input id="finished" type="checkbox" value="4"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="finished" class="ms-2 text-xs font-medium text-emerald-900 dark:text-gray-300">
                        FINISHED
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div class="flex justify-center items-center" id="transactionStatuses">
                <div class="flex items-center me-4">
                    <input id="expired" type="checkbox" value="5"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="expired" class="ms-2 text-xs font-medium text-gray-900 dark:text-gray-300">
                        EXPIRED
                    </label>
                </div>
                <div class="flex items-center me-4">
                    <input id="voided2" type="checkbox" value="6"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="voided2" class="ms-2 text-xs font-medium text-red-900 dark:text-gray-300">
                        VOIDED
                    </label>
                </div>
            </div>
        </div>

        <!-- Donut Chart -->
        <div class="py-6" id="branchTransactionsChart" ref="branchTransactionsChart"></div>
    </div>
</template>

<script setup>
    import { Link, router, usePage } from '@inertiajs/vue3';
    import { ref, onMounted, nextTick, watch } from 'vue';
    import ApexCharts from 'apexcharts';

    const props = defineProps({
        branches: {
            type: Array,
            required: true,
        },
        transactionsChartData: {
            type: Object,
            required: true,
        },
    });

    const branchTransactionsChart = ref(null);
    let transactionsChartInstance = null;

    onMounted(() => {
        nextTick(() => {
            if (branchTransactionsChart.value && typeof ApexCharts !== 'undefined') {
                transactionsChartInstance = new ApexCharts(branchTransactionsChart.value, getTransactionsChartOptions(props.transactionsChartData));

                transactionsChartInstance.render();

                const checkboxes = document.querySelectorAll('#transactionStatuses input[type="checkbox"]');

                checkboxes.forEach((checkbox) => {
                    checkbox.addEventListener('change', handleCheckboxChange);
                });
            }
        });
    });

    function handleCheckboxChange() {
        const selectedStatuses = Array.from(
            document.querySelectorAll('#transactionStatuses input[type="checkbox"]:checked')
        ).map((checkbox) => parseInt(checkbox.value, 10));

        if (selectedStatuses.length === 0) {
            transactionsChartInstance.updateOptions(getTransactionsChartOptions(props.transactionsChartData));
            return;
        }

        const filteredSeries = props.transactionsChartData.series.map((branch) => {
            const filteredData = selectedStatuses.map((status) => {
                const statusIndex = props.transactionsChartData.labels.indexOf(status);
                return statusIndex !== -1 ? branch.data[statusIndex] || 0 : 0;
            });
            return {
                name: branch.name,
                data: filteredData,
            };
        });

        transactionsChartInstance.updateOptions({
            series: filteredSeries.map((branch) => branch.data.reduce((a, b) => a + b, 0)),
            labels: props.branches.map((branch) => branch.name),
        });
    }

    const getTransactionsChartOptions = (data) => {
        return {
            series: data.series.map((branch) =>
                branch.data.reduce((a, b) => a + b, 0)
            ),
            labels: props.branches.map((branch) => branch.name),
            chart: {
                height: 320,
                width: '100%',
                type: 'donut',
            },
            plotOptions: {
                pie: {
                    donut: {
                        labels: {
                            show: true,
                            total: {
                                show: true,
                                label: 'Total',
                                formatter: function (w) {
                                    return w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                },
                            },
                        },
                    },
                },
            },
            legend: {
                position: 'bottom',
            },
            colors: ['#31C48D', '#0E9F6E', '#057A55', '#046C4E', '#03543F', '#014737'],
        };
    };

    watch(() => props.transactionsChartData, (newChartData) => {
        if (transactionsChartInstance) {
            transactionsChartInstance.updateOptions(getTransactionsChartOptions(newChartData));
        }
    });
</script>

