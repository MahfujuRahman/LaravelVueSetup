<template lang="">
   <div class="page-header">
        <div class="row">
            <div class="col-lg-12">
            <h5 class="text-capitalize">
                {{ page_title }}
            </h5>
            </div>
            <div class="col-lg-0">

            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:{
        page_title: {
            type: String,
            default: 'User Management'
        },
    }
}
</script>
<style lang="">

</style>
