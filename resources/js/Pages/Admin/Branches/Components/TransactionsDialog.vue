<template>
    <el-dialog
        :model-value="dialogVisible"
        @update:model-value="(value) => emit('update:dialogVisible', value)"
        :before-close="() => emit('update:dialogVisible', false)"
        :style="{ width: '90%', maxWidth: '600px', minWidth: '300px' }" class="responsive-dialog">
        <div v-if="bookings.length">
            <div v-for="booking in bookings" :key="booking.branch_id"
                class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <div class="mx-auto max-w-5xl">
                    <div class="mt-6 flow-root sm:mt-8">
                        <div class="flex justify-center items-center mb-2">
                            <span class="text-1xl font-bold">
                                {{ booking.branch_name }} | {{ getDateToday() }}
                            </span>
                        </div>
                        <hr class="m-2 h-2">
                        <div class="flex justify-center items-center mb-2">
                            <span class="text-1xl font-bold">
                                Today's Bookings Count per Status
                            </span>
                        </div>
                        <div class="divide-y divide-gray-200 dark:divide-gray-700 pr-10 pl-10">
                            <div class="flex flex-wrap items-center gap-y-1 py-1">
                                <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Status
                                    </dt>
                                    <dd class="pr-7 pl-7 ml-6 mt-1.5 inline-flex items-center rounded bg-blue-700 px-2 py-1 text-xs font-medium text-blue-100 dark:bg-blue-900 dark:text-blue-300">
                                        PENDING
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Count
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ booking.pending_count }}
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Total Price
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ formatNumber(booking.pending_total_price) }}
                                    </dd>
                                </dl>
                            </div>
                            <div class="flex flex-wrap items-center gap-y-1 py-1">
                                <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Status
                                    </dt>
                                    <dd class="pr-6 pl-6 ml-6 mt-1.5 inline-flex items-center rounded bg-yellow-400 px-2 py-1 text-xs font-medium text-yellow-100 dark:bg-yellow-900 dark:text-yellow-300">
                                        ONGOING
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Count
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ booking.ongoing_count }}
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Total Price
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ formatNumber(booking.ongoing_total_price) }}
                                    </dd>
                                </dl>
                            </div>
                            <div class="flex flex-wrap items-center gap-y-1 py-1">
                                <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Status
                                    </dt>
                                    <dd class="pr-5 pl-5 ml-6 mt-1.5 inline-flex items-center rounded bg-gray-300 px-2 py-1 text-xs font-medium text-gray-800 dark:bg-emerald-700 dark:text-gray-300">
                                        CANCELLED
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Count
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ booking.cancelled_count }}
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Total Price
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ formatNumber(booking.cancelled_total_price) }}
                                    </dd>
                                </dl>
                            </div>
                            <div class="flex flex-wrap items-center gap-y-1 py-1">
                                <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Status
                                    </dt>
                                    <dd class="pr-7 pl-7 ml-6 mt-1.5 inline-flex items-center rounded bg-emerald-700 px-2 py-1 text-xs font-medium text-emerald-100 dark:bg-emerald-900 dark:text-emerald-300">
                                        FINISHED
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Count
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ booking.finished_count }}
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Total Price
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ formatNumber(booking.finished_total_price) }}
                                    </dd>
                                </dl>
                            </div>
                            <div class="flex flex-wrap items-center gap-y-1 py-1">
                                <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Status
                                    </dt>
                                    <dd class="pr-8 pl-8 ml-6 mt-1.5 inline-flex items-center rounded bg-gray-500 px-2 py-1 text-xs font-medium text-gray-200 dark:bg-emerald-700 dark:text-gray-300">
                                        EXPIRED
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Count
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ booking.expired_count }}
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Total Price
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ formatNumber(booking.expired_total_price) }}
                                    </dd>
                                </dl>
                            </div>
                            <div class="flex flex-wrap items-center gap-y-1 py-1">
                                <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Status
                                    </dt>
                                    <dd class="pr-8 pl-8 ml-6 mt-1.5 inline-flex items-center rounded bg-red-700 px-2 py-1 text-xs font-medium text-red-100 dark:bg-red-900 dark:text-red-300">
                                        VOIDED
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Count
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ booking.voided_count }}
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Total Price
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ formatNumber(booking.voided_total_price) }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <hr class="m-2 h-2">

                        <div class="flex justify-center items-center mb-2">
                            <span class="text-1xl font-bold">Today's Product Bookings Count</span>
                        </div>

                        <div class="divide-y divide-gray-200 dark:divide-gray-700 pr-10 pl-10">
                            <div class="flex flex-wrap items-center gap-y-1 py-1">
                                <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Status
                                    </dt>
                                    <dd class="pr-10 pl-10 ml-6 mt-1.5 inline-flex rounded bg-emerald-700 px-2 py-1 text-xs font-medium text-emerald-100 dark:bg-emerald-900 dark:text-emerald-300">
                                        PAID
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Count
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ booking.product_bookings_count }}
                                    </dd>
                                </dl>
                                <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                    <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                        Total Price
                                    </dt>
                                    <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                        {{ formatNumber(booking.product_total_price) }}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <p class="text-center text-gray-600 dark:text-gray-400">No transactions available for this branch.</p>
        </div>
        <hr class="m-2 h-2">
        <div class="flex justify-center items-center mb-2">
            <span class="text-1xl font-bold">Today's Net Sales</span>
        </div>
        <div v-if="salesOrders.length">
            <div v-for="sales in salesOrders" :key="sales.branch_id">
                <div class="divide-y divide-gray-200 dark:divide-gray-700 pr-10 pl-10">
                    <div class="flex flex-wrap items-center gap-y-1 py-1">
                        <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                Status
                            </dt>
                            <dd class="pr-9 pl-9 ml-6 mt-1.5 inline-flex items-center rounded bg-blue-700 px-2 py-1 text-xs font-medium text-blue-100 dark:bg-blue-900 dark:text-blue-300">
                                BILLED
                            </dd>
                        </dl>
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                Count
                            </dt>
                            <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                {{ sales.billed_sales_count }}
                            </dd>
                        </dl>
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                Total Price
                            </dt>
                            <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                {{ formatNumber(sales.billed_sales_amount) }}
                            </dd>
                        </dl>
                    </div>
                    <div class="flex flex-wrap items-center gap-y-1 py-1">
                        <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                Status
                            </dt>
                            <dd class="pr-10 pl-10 ml-6 mt-1.5 inline-flex items-center rounded bg-emerald-700 px-2 py-1 text-xs font-medium text-emerald-100 dark:bg-emerald-900 dark:text-emerald-300">
                                PAID
                            </dd>
                        </dl>
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                Count
                            </dt>
                            <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                {{ sales.paid_sales_count }}
                            </dd>
                        </dl>
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                Total Price
                            </dt>
                            <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                {{ formatNumber(sales.paid_sales_amount) }}
                            </dd>
                        </dl>
                    </div>
                    <div class="flex flex-wrap items-center gap-y-1 py-1">
                        <dl class="w-2/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                Status
                            </dt>
                            <dd class="pr-8 pl-8 ml-6 mt-1.5 inline-flex items-center rounded bg-red-700 px-2 py-1 text-xs font-medium text-red-100 dark:bg-red-900 dark:text-red-300">
                                VOIDED
                            </dd>
                        </dl>
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                Count
                            </dt>
                            <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                {{ sales.voided_sales_count }}
                            </dd>
                        </dl>
                        <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                            <dt class="text-xs font-medium text-gray-500 dark:text-gray-400 text-center">
                                Total Price
                            </dt>
                            <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white text-center">
                                {{ formatNumber(sales.voided_sales_amount) }}
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <p class="text-center text-gray-600 dark:text-gray-400">No Sales available for this branch.</p>
        </div>
        <hr class="m-2 h-2">
        <div class="flex justify-center items-center mb-2">
            <span class="text-1xl font-bold">Shortcuts</span>
        </div>
        <div class="flex flex-col gap-2">
            <div class="flex justify-center">
                <Link type="button" :href="route('admin.transactions-reports.index')"
                    title="Go to Transactions Reports"
                    class="m-1 max-w-56 flex items-center justify-center space-x-2 text-emerald-700 bg-white border-emerald-700 border hover:bg-emerald-700 hover:text-white transition-colors focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                    <span>
                        Transactions
                    </span>
                </Link>
                <Link type="button"
                    title="Go to Sales Reports"
                    class="m-1 max-w-56 flex items-center justify-center space-x-2 text-emerald-700 bg-white border-emerald-700 border hover:bg-emerald-700 hover:text-white transition-colors focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                    <span>
                        Products
                    </span>
                </Link>
                <Link type="button" :href="route('admin.sales-reports.index')"
                    title="Go to Sales Reports"
                    class="m-1 max-w-56 flex items-center justify-center space-x-2 text-emerald-700 bg-white border-emerald-700 border hover:bg-emerald-700 hover:text-white transition-colors focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-500 focus:outline-none dark:focus:ring-emerald-800">
                    <span>
                        Sales
                    </span>
                </Link>
            </div>
        </div>

    </el-dialog>
</template>

<script setup>
import { defineProps, defineEmits } from 'vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    dialogVisible: {
        type: Boolean,
        required: true,
    },
    bookings: {
        type: Array,
        required: true,
    },
    salesOrders: {
        type: Array,
        required: true,
    },
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

function getDateToday() {
    const today = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric' };

    return today.toLocaleDateString('en-US', options);
}
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
