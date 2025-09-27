<template>
    <div
        class="group relative dark:bg-white dark:border-white p-4 rounded-xl bg-white border border-gray-100 shadow-sm"
        style="min-height: 500px;">
        <h5 class="text-center text-xl font-bold leading-none text-emerald-900 dark:text-white mt-4 mb-4">
            Sales Count Per Branch
        </h5>
        <div>
            <div class="flex justify-center items-center" id="salesStatuses">
                <div class="flex items-center me-4">
                    <input id="billed" type="checkbox" value="BILLED"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="billed" class="ms-2 text-sm font-medium text-blue-900 dark:text-gray-300">
                        BILLED
                    </label>
                </div>
                <div class="flex items-center me-4">
                    <input id="paid" type="checkbox" value="PAID"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="paid" class="ms-2 text-sm font-medium text-emerald-900 dark:text-gray-300">
                        PAID
                    </label>
                </div>
                <div class="flex items-center me-4">
                    <input id="voided" type="checkbox" value="VOIDED"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="voided" class="ms-2 text-sm font-medium text-red-900 dark:text-gray-300">
                        VOIDED
                    </label>
                </div>
            </div>
        </div>

        <!-- Donut Chart -->
        <div class="py-6" id="branchSalesChart" ref="branchSalesChart"></div>
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
        salesChartData: {
            type: Object,
            required: true,
        },
    });

    const branchSalesChart        = ref(null);
    let salesChartInstance        = null;

    onMounted(() => {
        nextTick(() => {
            if (branchSalesChart.value && typeof ApexCharts !== 'undefined') {
                salesChartInstance = new ApexCharts(branchSalesChart.value, getSalesChartOptions(props.salesChartData));

                salesChartInstance.render();

                const checkboxes = document.querySelectorAll('#salesStatuses input[type="checkbox"]');

                checkboxes.forEach((checkbox) => {
                    checkbox.addEventListener('change', handleCheckboxChange);
                });
            }
        });
    });

    function handleCheckboxChange() {
        const selectedStatuses = Array.from(
            document.querySelectorAll('#salesStatuses input[type="checkbox"]:checked')
        ).map((checkbox) => checkbox.value);

        if (selectedStatuses.length === 0) {
            salesChartInstance.updateOptions(getSalesChartOptions(props.salesChartData));
            return;
        }

        const filteredData = props.salesChartData.series.map((branch) => {
            return selectedStatuses.reduce((sum, status) => {
                const statusIndex = props.salesChartData.labels.indexOf(status);
                return sum + (branch.data[statusIndex] || 0);
            }, 0);
        });

        if (salesChartInstance) {
            salesChartInstance.updateOptions({
                series: filteredData,
                labels: props.branches.map((branch) => branch.name),
            });
        }
    }

    const getSalesChartOptions = (data) => {
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

    watch(() => props.salesChartData, (newChartData) => {
        if (salesChartInstance) {
            salesChartInstance.updateOptions(getSalesChartOptions(newChartData));
        }
    });
</script>
