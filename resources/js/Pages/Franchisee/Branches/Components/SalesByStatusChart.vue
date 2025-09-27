<template>
    <div
       class="group relative dark:bg-white dark:border-white p-11 rounded-xl bg-white border border-gray-100"
       style="min-height: 400px;">
       <h5 class="text-center text-md font-bold leading-none text-emerald-700 dark:text-white mt-4 mb-4">
           Sales by Status
       </h5>
        <!-- Line Chart -->
        <div class="py-6" id="sales-by-status-chart"></div>
    </div>
</template>

<script setup>
   import { initFlowbite } from 'flowbite';
   import { onMounted } from 'vue';
   import ApexCharts from 'apexcharts';

   onMounted(() => {
       initFlowbite();

        if (document.getElementById("sales-by-status-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("sales-by-status-chart"), getChartOptions());
            chart.render();
        }
   });

    const getChartOptions = () => {
        return {
            series: [45690, 30023, 20231],
            colors: ["#006769", "#40A578", "#9DDE8B"],
            chart: {
                height: 400,
                width: "100%",
                type: "pie",
            },
            stroke: {
                colors: ["white"],
                lineCap: "",
            },
            plotOptions: {
                pie: {
                    labels: {
                        show: true,
                    },
                    size: "100%",
                    dataLabels: {
                        offset: -100
                    }
                },
            },
            labels: ["PAID", "BILLED", "VOIDED"],
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
            },
            legend: {
                position: "bottom",
                fontFamily: "Inter, sans-serif",
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value
                    },
                },
            },
            xaxis: {
                labels: {
                    formatter: function (value) {
                        return value + "%"
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
        }
    }

    if (document.getElementById("sales-by-status-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("sales-by-status-chart"), getChartOptions());
        chart.render();
    }
</script>
