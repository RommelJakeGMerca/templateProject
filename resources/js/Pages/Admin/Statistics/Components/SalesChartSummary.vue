<template>
    <div class="group relative rounded-lg dark:bg-white dark:border-white p-6 bg-white border border-gray-100 shadow-sm">
        <div v-if="salesTotals.length" class="flow-root">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white text-center mb-4">
                Total Sales Amount by Status per Branch
            </h5>
            <div class="overflow-y-auto p-3" style="max-height: 415px;">
                <ul v-for="totals in salesTotals" :key="totals.id" role="list" class="divide-y divide-gray-200 dark:divide-gray-700  bg-white border border-gray-100 shadow-sm rounded mb-3">
                    <li class="py-3 sm:py-4">
                        <div class="flex flex-wrap items-center">
                            <!-- Branch -->
                            <div class="w-full sm:w-1/4 px-2">
                                <p class="text-sm font-medium text-gray-900 break-words dark:text-white text-center">
                                    Branch
                                </p>
                                <p class="text-sm text-gray-500 break-words dark:text-gray-400 p-2 text-center">
                                    {{ totals.branch_name }}
                                </p>
                            </div>
                            <!-- PAID -->
                            <div class="w-full sm:w-1/4 px-2">
                                <p class="text-sm font-extrabold text-emerald-700 break-words dark:text-white text-center">
                                    PAID
                                </p>
                                <p class="text-sm text-gray-500 break-words dark:text-gray-400 p-2 text-center">
                                    {{ formatNumber(totals.total_paid) }}
                                </p>
                            </div>
                            <!-- BILLED -->
                            <div class="w-full sm:w-1/4 px-2">
                                <p class="text-sm font-extrabold text-blue-700 break-words dark:text-white text-center">
                                    BILLED
                                </p>
                                <p class="text-sm text-gray-500 break-words dark:text-gray-400 p-2 text-center">
                                    {{ formatNumber(totals.total_billed) }}
                                </p>
                            </div>
                            <!-- VOIDED -->
                            <div class="w-full sm:w-1/4 px-2">
                                <p class="text-sm font-extrabold text-red-700 break-words dark:text-white text-center">
                                    VOIDED
                                </p>
                                <p class="text-sm text-gray-500 break-words dark:text-gray-400 p-2 text-center">
                                    {{ formatNumber(totals.total_voided) }}
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div v-else>
            <p class="text-center text-gray-600 dark:text-gray-400">No Record found</p>
        </div>
    </div>
</template>

<script setup>
    import { Link, router, usePage } from '@inertiajs/vue3';
    import { ref, onMounted, reactive, computed, watch  } from 'vue';

    const props = defineProps({
        salesTotals: {
            type: Object,
            required: true,
        },
    });

    onMounted(() => {
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
    });

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
