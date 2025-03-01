<template lang="">
    <div class="page-sidebar custom-scrollbar">

        <TopProfile />

        <ul class="sidebar-menu">

            <DropDownMenu
                :group_heading="`User`"
                :dropdown_title="`User`"
                :icon="`fa fa-user`"
                :customClass="`my call`"
            >
                <SingleMenu
                    :url="{ name: 'UserAll' }"
                    :title="`all user`"
                    :icon="`fa fa-list`"
                    :customClass="`my call`">
                </SingleMenu>

            </DropDownMenu>

            <SingleMenu
                :url="{ name: 'UserCreate' }"
                :title="`Create user`"
                :icon="`fa fa-list`"
                :customClass="`my call`">
            </SingleMenu>

            <li>
                <div class="sidebar-title">Layout</div>
                <a href="javascript:void(0)" class="sidebar-header">
                    <i class="icon-palette"></i> <span>Color Version</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="http://admin.pixelstrap.com/universal/default/layout-light.html"><i
                                class="fa fa-angle-right"></i>Layout Light</a></li>
                    <li><a href="http://admin.pixelstrap.com/universal/default/layout-dark.html"><i
                                class="fa fa-angle-right"></i>Layout Dark</a></li>
                </ul>
            </li>

            <li>
                <a href="http://admin.pixelstrap.com/universal/default/maintenance.html" class="sidebar-header">
                    <i class="icon-settings"></i><span> Maintenance</span>
                </a>
            </li>
        </ul>
    </div>
</template>
<script>
import TopProfile from './includes/TopProfile.vue';
import SingleMenu from './includes/SingleMenu.vue';
import DropDownMenu from './includes/DropDownMenu.vue';
export default {
    components: {
        TopProfile,
        SingleMenu,
        DropDownMenu
    }
}
</script>
<style lang="">

</style>
