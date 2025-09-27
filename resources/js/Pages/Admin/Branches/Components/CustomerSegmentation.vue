<template>
    <div class=" max-w:1/4 group relative dark:bg-white dark:border-white p-6 sm:p-11 rounded-xl bg-white border border-gray-100"
        style="min-height: 400px;">
        <h5 class="text-center text-lg sm:text-md font-bold leading-none text-emerald-700 dark:text-white mt-4 mb-4">
            Customer Segmentation
        </h5>
        <ul class="flex flex-wrap sm:flex-nowrap flex-col sm:flex-row text-xs sm:text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg"
            id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full sm:w-1/2">
                <button id="champions-tab" data-tabs-target="#champions" type="button" role="tab"
                    aria-controls="champions" aria-selected="true"
                    class="focus:bg-emerald-300 aria-selected:bg-emerald-300 transition inline-block w-full p-2 sm:p-4 text-emerald-700 font-extrabold hover:text-emerald-700 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                    Champions
                </button>
            </li>
            <li class="w-full sm:w-1/2">
                <button id="loyal-customers-tab" data-tabs-target="#loyal-customers" type="button" role="tab" aria-controls="loyal-customers"
                    aria-selected="false"
                    class="focus:bg-emerald-300 aria-selected:bg-emerald-300 transition inline-block w-full p-2 sm:p-4 text-emerald-700 font-extrabold hover:text-emerald-700 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                    Loyal Customers
                </button>
            </li>
            <li class="w-full sm:w-1/2">
                <button id="potential-loyalists-tab" data-tabs-target="#potential-loyalists" type="button" role="tab" aria-controls="potential-loyalists"
                    aria-selected="false"
                    class="focus:bg-emerald-300 aria-selected:bg-emerald-300 transition inline-block w-full p-2 sm:p-4 text-emerald-700 font-extrabold hover:text-emerald-700 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                    Potential Loyalists
                </button>
            </li>
            <li class="w-full sm:w-1/2">
                <button id="needs-attention-tab" data-tabs-target="#needs-attention" type="button" role="tab" aria-controls="needs-attention"
                    aria-selected="false"
                    class="focus:bg-emerald-300 aria-selected:bg-emerald-300 transition inline-block w-full p-2 sm:p-4 text-emerald-700 font-extrabold hover:text-emerald-700 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                    Needs Attention
                </button>
            </li>
            <li class="w-full sm:w-1/2">
                <button id="about-to-sleep-tab" data-tabs-target="#about-to-sleep" type="button" role="tab" aria-controls="about-to-sleep"
                    aria-selected="false"
                    class="focus:bg-emerald-300 aria-selected:bg-emerald-300 transition inline-block w-full p-2 sm:p-4 text-emerald-700 font-extrabold hover:text-emerald-700 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                    About To Sleep
                </button>
            </li>
            <li class="w-full sm:w-1/2">
                <button id="hibernating-tab" data-tabs-target="#hibernating" type="button" role="tab" aria-controls="hibernating"
                    aria-selected="false"
                    class="focus:bg-emerald-300 aria-selected:bg-emerald-300 transition inline-block w-full p-2 sm:p-4 text-emerald-700 font-extrabold hover:text-emerald-700 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                    Hibernating
                </button>
            </li>
        </ul>

        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600"
            style="min-height: 600px; max-height: 500px; overflow-y: auto;">
            <!-- champions tab -->
            <div class="hidden pt-4 pr-8 pl-8" id="champions" role="tabpanel" aria-labelledby="champions-tab">
                <div class="mt-6 flow-root sm:mt-8">
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- loyal-customers tab -->
            <div class="hidden pt-4 pr-8 pl-8" id="loyal-customers" role="tabpanel" aria-labelledby="loyal-customers-tab">
                <div class="mt-6 flow-root sm:mt-8">
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- potential-loyalists tab -->
            <div class="hidden pt-4 pr-8 pl-8" id="potential-loyalists" role="tabpanel" aria-labelledby="potential-loyalists-tab">
                <div class="mt-6 flow-root sm:mt-8">
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- needs-attention tab -->
            <div class="hidden pt-4 pr-8 pl-8" id="needs-attention" role="tabpanel" aria-labelledby="needs-attentionn-tab">
                <div class="mt-6 flow-root sm:mt-8">
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-to-sleep tab -->
            <div class="hidden pt-4 pr-8 pl-8" id="about-to-sleep" role="tabpanel" aria-labelledby="about-to-sleep-tab">
                <div class="mt-6 flow-root sm:mt-8">
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hibernating tab -->
            <div class="hidden pt-4 pr-8 pl-8" id="hibernating" role="tabpanel" aria-labelledby="hibernating-tab">
                <div class="mt-6 flow-root sm:mt-8">
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                        <div class="flex flex-wrap items-center gap-y-4 py-6">
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer ID
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    1217311
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Customer Name
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    Christy Patingco
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    PLC Progress
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-emerald-700 dark:text-white">
                                    5000
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Average Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 856.00
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Transactions
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    138
                                </dd>
                            </dl>
                            <dl class="w-1/2 sm:w-1/4 lg:w-auto lg:flex-1">
                                <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                    Total Service Spent
                                </dt>
                                <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                    ₱ 110,656.71
                                </dd>
                            </dl>
                            <a href="#"
                                class="w-full inline-flex justify-center rounded-lg  border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 lg:w-auto">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
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

const isLoading = ref(false);
const searchServiceQuery = ref('');
const searchPackageQuery = ref('');
const searchProductQuery = ref('');
</script>
