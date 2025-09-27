<template>
    <el-dialog
        :model-value="dialogVisible"
        @update:model-value="(value) => emit('update:dialogVisible', value)"
        title="Report Details"
        :before-close="() => emit('update:dialogVisible', false)"
        center
        :style="{ width: '90%', maxWidth: '400px', minWidth: '300px' }"
        class="responsive-dialog">
        <div
            :class="[
                'w-full max-w-md p-4 border rounded-lg sm:p-8',
                'dark:bg-gray-800 dark:border-gray-700',
                reportDetails.sales_status === 'PAID' ? 'shadow-md shadow-emerald-500 bg-white dark:bg-green-900' : '',
                reportDetails.sales_status === 'BILLED' ? 'shadow-md shadow-blue-500 bg-white dark:bg-blue-900' : '',
                reportDetails.sales_status === 'VOIDED' ? 'shadow-md shadow-red-500 bg-white dark:bg-red-900' : '',
            ]">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white text-center">
                Sales Report Details
            </h5>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-500">
                    <li class="py-2 sm:py-2">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white mt-2 text-center">
                            Branch Details
                        </p>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Branch ID :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.branch_id }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Branch Name :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.branch_name }}
                            </div>
                        </div>
                    </li>

                    <li class="py-2 sm:py-2">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white mt-2 text-center">
                            Customer Details
                        </p>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Customer ID :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.customer_id }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Customer Name :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.customer_name }}
                            </div>
                        </div>
                    </li>

                    <li class="py-2 sm:py-2">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white mt-2 text-center">
                            Sales Order Details
                        </p>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Sales Order ID :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.sales_order_id }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Booking ID :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.booking_id }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Date Created :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.date }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Reference Number :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.reference_number }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Invoice Number :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.invoice_number }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Status :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <span v-if="reportDetails.sales_status === 'PAID'"
                                    class="bg-green-100 text-green-800 text-sm font-extrabold px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"
                                    title="PAID (Finished and Paid)">
                                    {{ reportDetails.sales_status }}
                                </span>
                                <span v-else-if="reportDetails.sales_status === 'BILLED'"
                                    class="bg-blue-100 text-blue-800 text-sm font-extrabold px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300"
                                    title="BILLED (Finished not yet Paid)">
                                    {{ reportDetails.sales_status }}
                                </span>
                                <span v-else-if="reportDetails.sales_status === 'VOIDED'"
                                    class="bg-red-100 text-red-800 text-sm font-extrabold px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300"
                                    title="VOIDED (Paid but Voided)">
                                    {{ reportDetails.sales_status }}
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Wax Amount :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ reportDetails.wax_amount }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Subtotal (GROSS) :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ formatNumber(reportDetails.sub_total) }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Discount Total :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ formatNumber(reportDetails.discount_total) }}
                            </div>
                        </div>
                        <div class="flex items-center py-1">
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Grand Total (NET) :
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                {{ formatNumber(reportDetails.grand_total) }}
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </el-dialog>
</template>

<script setup>
    import { defineProps, defineEmits } from 'vue';

    defineProps({
        dialogVisible: {
            type: Boolean,
            required: true,
        },
        reportDetails: {
            type: Object,
            required: true,
        }
    });

    const emit = defineEmits(['update:dialogVisible']);

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
