<template lang="">
    <li class="active">
        <div class="sidebar-title" :v-if="group_heading">
            {{ group_heading }}
        </div>
        <a href="javascript:void(0)"
        :class="`sidebar-header ${customClass}`">
            <i :class="icon"></i>
            <span>{{ dropdown_title }}</span>
            <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="sidebar-submenu menu-open">
            <slot></slot>
        </ul>
    </li>
</template>
<script>
export default {
    props:{
        group_heading: {
            type: String,
            default: ''
        },
        customClass: {
            type: String,
            default: ''
        },
        icon: {
            type: String,
            default: 'icon-desktop'
        },
        dropdown_title: {
            type: String,
            default: 'group title'
        },
    }
}
</script>
<style lang="">

</style>
