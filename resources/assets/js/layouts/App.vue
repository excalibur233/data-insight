<template>
    <div>
        <sidebar></sidebar>
        <router-view></router-view>
    </div>
</template>

<script>
    import Sidebar from './Sidebar.vue';

    export default {
        components: {
            sidebar: Sidebar,
        }
    }
</script>
