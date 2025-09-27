<template>
    <AdminLayout>
        <div class="h-full overflow-y-auto">
            <BranchStatistics/>
        </div>
    </AdminLayout>
</template>

<script setup>
    import AdminLayout from '../Components/AdminLayout.vue';
    import { onMounted } from 'vue';
    import { initFlowbite } from 'flowbite';
    import { router, usePage } from '@inertiajs/vue3';
    import BranchStatistics from './Components/BranchStatistics.vue';

    onMounted(() => {
        initFlowbite();

        const currentRoute = usePage().url;
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
</script>
