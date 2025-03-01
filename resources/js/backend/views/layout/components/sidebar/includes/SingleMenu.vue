<template lang="">
    <li>
        <router-link
            :to="url"
            :class="`sidebar-header ${customClass}`"
            >
            <i :class="icon"></i>
            <span>
                {{ title }}
            </span>
        </router-link>
    </li>
</template>
<script>
export default {
    props: {
        url: {
            type: Object,
            default: {
                name: 'Dashboard',
                params: {},
            }
        },
        customClass: {
            type: String,
            default: ''
        },
        icon: {
            type: String,
            default: 'icon-anchor'
        },
        title: {
            type: String,
            default: 'nav link'
        },
    }
}
</script>
<style lang="">

</style>
