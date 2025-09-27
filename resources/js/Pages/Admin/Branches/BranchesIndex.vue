<template>
    <AdminLayout>
        <div class="h-full overflow-y-auto">
            <BranchList :branches="branches" @branchRemoved="refreshBranchesData"/>
        </div>
    </AdminLayout>
</template>

<script setup>
    import AdminLayout from '../Components/AdminLayout.vue';
    import BranchList from './Components/BranchList.vue';
    import { onMounted } from 'vue';
    import { initFlowbite } from 'flowbite';
    import { router, usePage } from '@inertiajs/vue3';

    defineProps({
        branches: Array
    });

    onMounted(() => {
        initFlowbite();
    })

    function refreshBranchesData() {
        router.visit(route('franchisee.branches.index'), {
            method: 'get',
            preserveState: true,
            replace: true,
            onSuccess: () => {
                Swal.fire({
                    toast: true,
                    icon: "success",
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    title: "Data refreshed!",
                });
            },
        });
    }
</script>
