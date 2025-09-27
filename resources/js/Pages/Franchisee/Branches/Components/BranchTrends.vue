<template>
    <div class=" max-w:1/4 group relative dark:bg-white dark:border-white p-6 sm:p-11 rounded-xl bg-white border border-gray-100"
        style="min-height: 400px;">
        <h5 class="text-center text-lg sm:text-md font-bold leading-none text-emerald-700 dark:text-white mt-4 mb-4">
            Trends
        </h5>
        <ul
            class="flex flex-wrap sm:flex-nowrap flex-col sm:flex-row text-xs sm:text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg"
            id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full sm:w-1/2">
                <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services"
                    aria-selected="true"
                    class="focus:bg-emerald-300 aria-selected:bg-emerald-300 transition inline-block w-full p-2 sm:p-4 text-emerald-700 font-extrabold hover:text-emerald-700 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                    Services
                </button>
            </li>
            <li class="w-full sm:w-1/2">
                <button id="packages-tab" data-tabs-target="#packages" type="button" role="tab" aria-controls="packages"
                    aria-selected="false"
                    class="focus:bg-emerald-300 aria-selected:bg-emerald-300 transition inline-block w-full p-2 sm:p-4 text-emerald-700 font-extrabold hover:text-emerald-700 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                    Packages
                </button>
            </li>
            <li class="w-full sm:w-1/2">
                <button id="products-tab" data-tabs-target="#products" type="button" role="tab" aria-controls="products"
                    aria-selected="false"
                    class="focus:bg-emerald-300 aria-selected:bg-emerald-300 transition inline-block w-full p-2 sm:p-4 text-emerald-700 font-extrabold hover:text-emerald-700 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                    Products
                </button>
            </li>
        </ul>

        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600" style="min-height: 430px; max-height: 430px; overflow-y: auto;">
            <!-- services tab -->
            <div class="hidden pt-4" id="services" role="tabpanel" aria-labelledby="services-tab">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 p-2">
                    <div class="w-full md:w-2/2">
                        <form class="flex items-center" @submit.prevent="searchService" :disabled="isLoading">
                            <label for="simple-search" class="sr-only">
                                {{ isLoading ? 'Disabled...' : 'Search' }}
                            </label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" v-model="searchServiceQuery"
                                    class="bg-gray-50 border border-emerald-700 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
                                    placeholder="Search" />
                            </div>
                        </form>
                    </div>
                    <li class="py-3 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-xs font-extrabold text-emerald-700 break-words dark:text-white">
                                    SERVICE
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-gray-900 dark:text-white">
                                <p class="text-xs font-extrabold text-emerald-700 break-words dark:text-white">
                                    PAID SALES AMOUNT
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    1
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Face Service
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 445,467.00
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    2
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Hand Service
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 345,137.20
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    3
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Leg Service
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 225,307.20
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    4
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Chest Service
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 201,257.20
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    5
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Back Service
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 100,327.20
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- packages tab -->
            <div class="hidden pt-4" id="packages" role="tabpanel" aria-labelledby="packages-tab">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 p-2">
                    <div class="w-full md:w-2/2">
                        <form class="flex items-center" @submit.prevent="searchPackage" :disabled="isLoading">
                            <label for="simple-search" class="sr-only">
                                {{ isLoading ? 'Disabled...' : 'Search' }}
                            </label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" v-model="searchPackageQuery"
                                    class="bg-gray-50 border border-emerald-700 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
                                    placeholder="Search" />
                            </div>
                        </form>
                    </div>
                    <li class="py-3 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-xs font-extrabold text-emerald-700 break-words dark:text-white">
                                    PACKAGE
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-gray-900 dark:text-white">
                                <p class="text-xs font-extrabold text-emerald-700 break-words dark:text-white">
                                    PAID SALES AMOUNT
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    1
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Face Package
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 445,467.00
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    2
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Hand Package
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 345,137.20
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    3
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Leg Package
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 225,307.20
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    4
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Chest Package
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 201,257.20
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    5
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Back Package
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 100,327.20
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- products -->
            <div class="hidden pt-4" id="products" role="tabpanel" aria-labelledby="products-tab">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 p-2">
                    <div class="w-full md:w-2/2">
                        <form class="flex items-center" @submit.prevent="searchProduct" :disabled="isLoading">
                            <label for="simple-search" class="sr-only">
                                {{ isLoading ? 'Disabled...' : 'Search' }}
                            </label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" v-model="searchProductQuery"
                                    class="bg-gray-50 border border-emerald-700 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
                                    placeholder="Search" />
                            </div>
                        </form>
                    </div>
                    <li class="py-3 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-xs font-extrabold text-emerald-700 break-words dark:text-white">
                                    PRODUCT
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-gray-900 dark:text-white">
                                <p class="text-xs font-extrabold text-emerald-700 break-words dark:text-white">
                                    PAID SALES AMOUNT
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    1
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Face Product
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 445,467.00
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    2
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Hand Product
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 345,137.20
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    3
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Leg Product
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 225,307.20
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    4
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Chest Product
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 201,257.20
                            </div>
                        </div>
                    </li>
                    <li class="py-2 sm:py-4 sm:p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center min-w-0 space-x-2">
                                <p class="text-sm font-extrabold text-emerald-100 break-words dark:text-white px-2 py-1 rounded bg-emerald-500">
                                    5
                                </p>
                                <p class="text-sm font-medium text-emerald-700 break-words dark:text-white">
                                    Back Product
                                </p>
                            </div>
                            <div class="text-sm sm:text-base font-semibold text-emerald-700 dark:text-white">
                                ₱ 100,327.20
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { initFlowbite } from 'flowbite';
    import { onMounted, ref } from 'vue';

    onMounted(() => {
        initFlowbite();
    });

    const isLoading           = ref(false);
    const searchServiceQuery  = ref('');
    const searchPackageQuery  = ref('');
    const searchProductQuery  = ref('');
</script>
