import { createRouter, createWebHashHistory } from "vue-router";

import Dashboard from "./views/Dashboard.vue";
import UserLayout from "./views/pages/user_management/layout.vue";
import UserAll from "./views/pages/user_management/All.vue";
import UserCreate from "./views/pages/user_management/Create.vue";

import user_management_router from './views/pages/user_management/config/router.js';

export const routes = [
    { path: "", component: Dashboard, name: "Dashboard" },

    user_management_router,
];

export const backend_vue_router = createRouter({
    history: createWebHashHistory(),
    routes,
});
