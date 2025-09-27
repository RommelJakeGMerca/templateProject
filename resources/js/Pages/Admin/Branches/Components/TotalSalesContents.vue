<template>
    <div class="group relative dark:bg-white dark:border-white p-11 rounded-xl bg-white border border-gray-100"
        style="min-height: 585px; max-height: 585px; overflow-y: auto;">
        <h5 class="text-center text-md font-bold leading-none text-emerald-700 dark:text-white mt-1 mb-1">
            Net Sales Summary
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
                    <span class="text-emerald-700 bg-emerald-200 p-1 rounded">Paid</span> Paid Sales
                </dt>
                <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                    ₱ 24,345,239.93
                </dd>
            </dl>
            <dl class="sm:flex items-center justify-between gap-4 p-2">
                <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                    <span class="text-blue-700 bg-blue-200 p-1 rounded">Billed</span> Sales
                </dt>
                <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                    ₱ 3,239.42
                </dd>
            </dl>
            <dl class="sm:flex items-center justify-between gap-4 p-2">
                <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                    <span class="text-red-700 bg-red-200 p-1 rounded">Voided</span> Sales
                </dt>
                <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                    ₱ 12,234,718.03
                </dd>
            </dl>
            <dl class="sm:flex items-center justify-between gap-4 p-2">
                <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                    <span class="text-purple-700 bg-purple-200 p-1 rounded">Discount</span> Amount
                </dt>
                <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                    ₱ 28,208.89
                </dd>
            </dl>
        </div>
        <h5 class="text-center text-md font-bold leading-none text-emerald-700 dark:text-white mt-1 mb-1">
            Gross Sales Summary
        </h5>
        <div
            class="divide-y divide-gray-300 space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 mb-6 md:mb-8">
            <dl class="sm:flex items-center justify-between gap-4 p-2">
                <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                    <span class="text-teal-700 bg-teal-200 p-1 rounded">Service&Package</span> Sales
                </dt>
                <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                    ₱ 3,107,869.53
                </dd>
            </dl>
            <dl class="sm:flex items-center justify-between gap-4 p-2">
                <dt class="font-bold mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                    <span class="text-yellow-700 bg-yellow-200 p-1 rounded">Product</span> Sales
                </dt>
                <dd class="font-extrabold text-emerald-700 dark:text-white sm:text-end">
                    ₱ 62,417.21
                </dd>
            </dl>
        </div>
    </div>
</template>

<script setup>
    import { initFlowbite } from 'flowbite';
    import { onMounted } from 'vue';

    onMounted(() => {
        initFlowbite();
    });
</script>
