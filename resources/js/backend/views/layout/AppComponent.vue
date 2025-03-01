<template lang="">
    <!--page-wrapper Start-->
    <div class="page-wrapper">
        <!--Page Header Start-->
            <TopHeader />
        <!--Page Header Ends-->

        <!--Page Body Start-->
        <div class="page-body-wrapper">
            <!--Page Sidebar Start-->
            <Sidebar />
            <!--Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts -->
                <!-- <Breadcum /> -->
                <!-- Container-fluid Ends -->

                <!-- Container-fluid starts -->
                <div class="container-fluid">
                    <router-view></router-view>
                </div>
                <!-- Container-fluid starts -->
            </div>
        </div>
        <!--Page Body Ends-->
    </div>
    <!--page-wrapper Ends-->
</template>
<script>
import TopHeader from './components/TopHeader.vue'
import Sidebar from './components/sidebar/Sidebar.vue'
import Breadcum from './components/Breadcum.vue'
export default {
    components: {
        TopHeader,
        Sidebar,
        Breadcum
    }
}
</script>
<style lang="">

</style>
