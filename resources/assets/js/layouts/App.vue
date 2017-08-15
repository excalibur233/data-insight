<template>
    <div>
        <topNavbar><slot></slot></topNavbar>
        <sidebar></sidebar>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        components: {
            sidebar: require('./Sidebar.vue'),
            topNavbar: require('./TopNavbar.vue'),
        }
    }
</script>
