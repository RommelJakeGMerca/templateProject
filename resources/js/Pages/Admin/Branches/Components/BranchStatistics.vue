<template>
    <section class="bg-gray-50 dark:bg-gray-900 h-full p-3 sm:p-5 overflow-y-auto">
        <div
            class="rounded-lg flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 bg-white border border-gray-100 shadow-sm">
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <Link type="button" :href="route('admin.branches.index')"
                    class="flex items-center justify-center space-x-2 text-white bg-emerald-700 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    <span class="text-md">
                        Return to Branches
                    </span>
                </Link>

                <h6 class="mr-11 text-xl font-extrabold text-emerald-700 dark:text-white">
                    Branch Statistics
                </h6>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <h6 class="mr-2 text-sm font-medium text-emerald-900 dark:text-white">
                    Filter
                </h6>
                <select id="year" v-model="selectedYear"
                    class="w-full text-sm text-gray-900 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    style="min-width: 100px;">
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
                <button type="button" :disabled="isLoading" @click="refreshCharts"
                    class="flex items-center justify-center space-x-2 text-white bg-emerald-900 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                    <span>{{ isLoading ? 'Disabled...' : 'Refresh' }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                </button>
                <button type="button" :disabled="isLoading" @click="openStaffing"
                    class="flex items-center justify-center space-x-2 text-white bg-emerald-900 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                    <span>{{ isLoading ? 'Disabled...' : 'Staffing' }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-11 items-center">
            <MonthlySalesChart/>
            <SalesByStatusChart/>
            <TotalSalesContents/>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-11 items-center">
            <BranchTrends/>
            <TechnicianTrends/>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-1 xl:gap-x-11 items-center">
            <CustomerSegmentation/>
        </div>

        <!-- Staffing -->
        <el-dialog
            v-model="dialogVisible"
            :before-close="handleClose" center
            :style="{ width: '90%', maxWidth: '600px', minWidth: '300px' }"
            class="responsive-dialog">
                <h5 class="text-center text-md font-bold leading-none text-emerald-700 dark:text-white mt-1 mb-1">
                    Branch Historical Data
                </h5>
                <div
                    class="divide-y divide-gray-300 space-y-4 sm:space-y-1 rounded-lg border border-gray-100 bg-gray-50 p-3 dark:border-gray-700 dark:bg-gray-800 mb-6 md:mb-8">
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Branch
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                            Branch A
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Current Number of Technicians
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                            5
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Technicians Shift Hours
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                            8
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Paid Transactions Service Hours for the last 365 days
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                            12,165.45
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Average Daily Service Hours per Day
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                            33.33
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Utilization Rate
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                            82.5 %
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Average Hours Technicians Worked per Day
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                            6.6
                        </dd>
                    </dl>
                </div>
                <h5 class="text-center text-md font-bold leading-none text-emerald-700 dark:text-white mt-1 mb-1">
                    Recommendation
                </h5>
                <div
                    class="divide-y divide-gray-300 space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 mb-6 md:mb-8">
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Recommended Technicians Needed for the next 2 months
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white text-3xl sm:text-end">
                            5.05
                        </dd>
                    </dl>
                </div>
                <h5 class="text-center text-md font-bold leading-none text-emerald-700 dark:text-white mt-1 mb-1">
                    Findings
                </h5>
                <div
                    class="divide-y divide-gray-300 space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 mb-6 md:mb-8">
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Average Daily Service Hours per Day (33.33 hrs/day)
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end bg-emerald-200 p-1 rounded">
                            Active Performer
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Average Hours Technicians Worked (6.6 hrs/day)
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end bg-emerald-200 p-1 rounded">
                            Productive
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4 p-2">
                        <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Recommended Technicians Needed for the next 2 months (5.05)
                        </dt>
                        <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end bg-emerald-200 p-1 rounded">
                            Sufficient
                        </dd>
                    </dl>
                </div>
        </el-dialog>
    </section>
</template>

<script setup>
    import { Link, router } from '@inertiajs/vue3';
    import { initFlowbite } from 'flowbite';
    import { ref, onMounted, nextTick, watch } from 'vue';
    import MonthlySalesChart from './MonthlySalesChart.vue';
    import SalesByStatusChart from './SalesByStatusChart.vue';
    import TotalSalesContents from './TotalSalesContents.vue';
    import BranchTrends from './BranchTrends.vue';
    import TechnicianTrends from './TechnicianTrends.vue';
    import CustomerSegmentation from './CustomerSegmentation.vue';

    onMounted(() => {
        initFlowbite();
    });

    const selectedYear  = ref('');
    const isLoading     = ref(false);
    const currentYear   = new Date().getFullYear();
    const years         = Array.from({ length: currentYear - 2020 + 1 }, (_, i) => 2020 + i);
    const dialogVisible = ref(false);

    const refreshCharts = () => {
        Swal.fire({
            toast: true,
            icon: "success",
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            title: "Data refreshed!",
        });
    };

    const openStaffing = () => {
        isLoading.value     = true;
        dialogVisible.value = true
    };

    const handleClose = () => {
        isLoading.value     = false;
        dialogVisible.value = false;
    };
</script>

<style scoped>
    .responsive-dialog {
        width: 80%;
        max-width: 600px;
        /* Max width for large screens */
    }

    @media (max-width: 768px) {
        .responsive-dialog {
            width: 95%;
            /* Adjust for smaller screens */
        }
    }

    @media (max-width: 480px) {
        .responsive-dialog {
            width: 100%;
            /* Full width on very small screens */
        }
    }
</style>
