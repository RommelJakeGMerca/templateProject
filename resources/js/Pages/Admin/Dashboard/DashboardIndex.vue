<template>
    <AdminLayout>
        <div class="h-full overflow-y-auto transition">
            <div class="gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-11 items-center p-3">
                <div
                    class="rounded-lg flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-3 bg-white border border-gray-100 shadow-sm">
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <h6 class="mr-11 text-xl font-extrabold text-emerald-700 dark:text-white">
                            Dashboard
                        </h6>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button type="button" :disabled="isLoading" @click="refreshDashboardData"
                            class="flex items-center justify-center space-x-2 text-white bg-emerald-700 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                            <span class="text-md">{{ isLoading ? 'Disabled...' : 'Refresh' }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div
                class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-5 items-center p-3">
                <!-- branches -->
                <div
                    class="w-md h-60 group relative dark:bg-white dark:border-white rounded-xl bg-white border border-gray-100 shadow-sm">
                    <div class="px-5 py-5">
                        <h5 class="text-md font-semibold tracking-tight text-gray-600 dark:text-white text-center">
                            Number of Branches
                        </h5>
                        <div class="flex flex-col gap-2">
                            <span class=" text-9xl font-bold text-emerald-700 dark:text-white mb-1 text-center">
                                {{ userBranches.length }}
                            </span>
                            <div class="flex justify-end">
                                <Link type="button" :href="route('admin.branches.index')" title="Go to Branches"
                                    class="max-w-56 flex items-center justify-center space-x-2 text-emerald-700 bg-white border-emerald-700 border hover:bg-emerald-700 hover:text-white transition-colors focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                                    <span>
                                        Branches
                                    </span>
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales reports -->
                <div
                    class="w-md h-60  group relative dark:bg-white dark:border-white rounded-xl bg-white border border-gray-100 shadow-sm">
                    <div class="px-5 py-5">
                        <h5 class="text-md font-semibold tracking-tight text-gray-600 dark:text-white text-center">
                            Paid Sales Today
                        </h5>
                        <div class="flex items-center gap-2 mb-4">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-bold text-gray-700 break-words dark:text-white">
                                    Count
                                </p>
                                <p class="break-words font-extrabold text-emerald-700 text-2xl dark:text-white">
                                    {{ paidSales.paid_sales_count }}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-5">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-bold text-gray-700 break-words dark:text-white">
                                    Amount
                                </p>
                                <p class="break-words font-extrabold text-emerald-700 text-2xl dark:text-white">
                                    {{ formatNumber(paidSales.paid_sales_amount) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex justify-end">
                                <Link type="button" :href="route('admin.sales-reports.index')"
                                    title="Go to Sales Reports"
                                    class="max-w-56 flex items-center justify-center space-x-2 text-emerald-700 bg-white border-emerald-700 border hover:bg-emerald-700 hover:text-white transition-colors focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                                    <span>
                                        Sales Reports
                                    </span>
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- transactions reports -->
                <div
                    class="w-md h-60 group relative dark:bg-white dark:border-white rounded-xl bg-white border border-gray-100 shadow-sm">
                    <div class="px-5 py-5">
                        <h5 class="text-md font-semibold tracking-tight text-gray-600 dark:text-white text-center">
                            Finished Transactions Today
                        </h5>
                        <div class="flex items-center gap-2 mb-5">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-bold text-gray-700 break-words dark:text-white">
                                    Count
                                </p>
                                <p class="break-words font-extrabold text-emerald-700 text-2xl dark:text-white">
                                    {{ finishedTransactions.finished_transactions_count }}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-bold text-gray-700 break-words dark:text-white">
                                    Amount
                                </p>
                                <p class="break-words font-extrabold text-emerald-700 text-2xl dark:text-white">
                                    {{ formatNumber(finishedTransactions.finished_transactions_amount) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex justify-end">
                                <Link type="button" :href="route('admin.transactions-reports.index')"
                                    title="Go to Transactions Reports"
                                    class="max-w-56 flex items-center justify-center space-x-2 text-emerald-700 bg-white border-emerald-700 border hover:bg-emerald-700 hover:text-white transition-colors focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                                    <span>
                                        Transactions Reports
                                    </span>
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- statistics -->
                <div
                    class="w-md h-60 group relative dark:bg-white dark:border-white rounded-xl bg-white border border-gray-100 shadow-sm">
                    <div class="px-5 py-5">
                        <h5 class="text-md font-semibold tracking-tight text-gray-600 dark:text-white text-center">
                            My Statistics
                        </h5>
                        <div class="flex items-center gap-2 mb-2">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-bold text-gray-700 break-words dark:text-white">
                                    Interactive Charts
                                </p>
                                <p class="break-words font-extrabold text-emerald-700 text-sm dark:text-white">
                                    Explore data like never before with interactive charts.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-bold text-gray-700 break-words dark:text-white">
                                    Data Interpretation
                                </p>
                                <p class="break-words font-extrabold text-emerald-700 text-sm dark:text-white">
                                    Simplify complex data with easy-to-understand graphs
                                </p>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <Link type="button" :href="route('admin.statistics.index')"
                                title="Go to My Statistics"
                                class="max-w-56 flex items-center justify-center space-x-2 text-emerald-700 bg-white border-emerald-700 border hover:bg-emerald-700 hover:text-white transition-colors focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                            <span>
                                My Statistics
                            </span>
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
            <!-- intro -->
            <div
                class="gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-11 items-center p-3">
                <div
                    class="group relative dark:bg-white dark:border-white rounded-xl bg-white border border-gray-200 shadow-xl"
                    style="
                        background-image: url('https://images.unsplash.com/photo-1493606278519-11aa9f86e40a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-attachment: fixed;">
                    <div class="h-80 gap-16 items-center py-4 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                        <div class="font-light text-emerald-500 sm:text-lg dark:text-emerald-400">
                            <h2 class="mb-4 text-5xl tracking-tight font-extrabold text-emerald-700 dark:text-white">
                                You're in the right Place.
                            </h2>
                            <p class="mb-4 text-sm text-gray-600 font-bold">
                                Merx, or Vendors Metrics, is designed to deliver valuable insights tailored to support informed
                                decision-making, ensuring your business decisions are strategic and impactful.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>

<script setup>
    import { router, usePage } from '@inertiajs/vue3';
    import { ref, onMounted } from 'vue';
    import axios from 'axios';
    import { initFlowbite } from 'flowbite';
    import AdminLayout from '../Components/AdminLayout.vue';
    import { Link } from '@inertiajs/vue3';

    const props = defineProps({
        userBranches: {
            type: Object,
            required: true,
        },
        paidSales: {
            type: Object,
            required: true,
        },
        finishedTransactions: {
            type: Object,
            required: true
        }
    });

    const isLoading          = ref(false);
    const salesDialogVisible = ref(false);
    const salesReportsData   = ref([]);

    onMounted(() => {
        initFlowbite();
        const currentRoute  = usePage().url;
        const hasQueryParams = currentRoute.includes('?');

        if (hasQueryParams) {
            router.visit(currentRoute.split('?')[0], {
                method: 'get',
                data: {},
                preserveState: false,
                replace: true,
            });
        }
    })

    function refreshDashboardData() {
        if (isLoading.value) return;

        isLoading.value        = true;

        router.visit(route('admin.dashboard.index'), {
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

    const showSalesReportsModal = (paidSales) => {
        salesDialogVisible.value = true;
        isLoading.value          = true;
        salesReportsData.value   = paidSales;
    };

    const handleClose = async () => {
        salesDialogVisible.value = false;
        isLoading.value          = false;
    };

    function formatNumber(value) {
        if (value === null || value === undefined || isNaN(value)) {
            return '₱0.00';
        }
        return new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'PHP',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        }).format(value);
    };
</script>

<style scoped>
    .responsive-dialog {
        width: 80%;
        max-width: 600px; /* Max width for large screens */
    }

    @media (max-width: 768px) {
        .responsive-dialog {
            width: 95%; /* Adjust for smaller screens */
        }
    }

    @media (max-width: 480px) {
        .responsive-dialog {
            width: 100%; /* Full width on very small screens */
        }
    }
</style>
