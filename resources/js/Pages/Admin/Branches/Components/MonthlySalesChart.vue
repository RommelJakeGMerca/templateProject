<template>
    <div
       class="group relative dark:bg-white dark:border-white p-11 rounded-xl bg-white border border-gray-100"
       style="min-height: 490px;">
       <h5 class="text-center text-md font-bold leading-none text-emerald-700 dark:text-white mt-4 mb-4">
           Monthly Sales
       </h5>
       <div class="flex justify-between">
           <div>
               <h5 class="leading-none text-2xl font-bold text-emerald-600 dark:text-white pb-2">
                   ₱ 24,050.00
               </h5>
               <p class="text-xs font-normal text-gray-700 dark:text-gray-400">
                   Total Sales this month
               </p>
           </div>
       </div>
       <div id="monthly-chart"></div>
    </div>
</template>

<script setup>
   import { initFlowbite } from 'flowbite';
   import { onMounted } from 'vue';
   import ApexCharts from 'apexcharts';

   onMounted(() => {
       initFlowbite();

       if (document.getElementById("monthly-chart") && typeof ApexCharts !== 'undefined') {
           const chart = new ApexCharts(document.getElementById("monthly-chart"), options);
           chart.render();
       }
   });

   const options = {
       chart: {
           height: "100%",
           maxWidth: "100%",
           type: "area",
           fontFamily: "Inter, sans-serif",
           dropShadow: {
               enabled: false,
           },
           toolbar: {
               show: false,
           },
       },
       tooltip: {
           enabled: true,
           x: {
               show: false,
           },
       },
       fill: {
           type: "gradient",
           gradient: {
               opacityFrom: 0.96,
               opacityTo: 0,
               shade: "#eb7500",
               gradientToColors: ["#045c31"],
           },
       },
       dataLabels: {
           enabled: false,
       },
       stroke: {
           width: 4,
       },
       grid: {
           show: false,
           strokeDashArray: 4,
           padding: {
               left: 2,
               right: 2,
               top: 0
           },
       },
       series: [
           {
               name: "Paid Sales",
               data: [23994, 14399, 12987, 5478, 1997, 9774, 4992, 1356, 6789, 9650, 2967, 24050],
               color: "#05a66b",
           },
       ],
       xaxis: {
           categories: [
                        'January',
                        'February',
                        'March',
                        'April',
                        'May',
                        'June',
                        'July',
                        'August',
                        'September',
                        'October',
                        'November',
                        'December'
                    ],
           labels: {
               show: false,
           },
           axisBorder: {
               show: false,
           },
           axisTicks: {
               show: false,
           },
       },
       yaxis: {
           show: false,
       },
   }

   if (document.getElementById("monthly-chart") && typeof ApexCharts !== 'undefined') {
       const chart = new ApexCharts(document.getElementById("monthly-chart"), options);
       chart.render();
   }
</script>
