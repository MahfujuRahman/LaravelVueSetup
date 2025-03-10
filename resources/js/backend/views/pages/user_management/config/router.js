import config from './index.js';

import Layout from '../layout.vue';
import Create from '../Create.vue';
import All from '../All.vue';
import Edit from '../Edit.vue';
import Show from '../Show.vue';

let route_name_prefix = config.route_name_prefix;
let route_path_prefix = config.route_path_prefix;

let router = {
    path: route_path_prefix,
    component: Layout,
    children: [
        {
            path: "",
            component: All,
            name: "User",
        },
        {
            path: "create",
            component: Create,
            name: route_name_prefix + "Create",
        },
        {
            path: "all",
            component: All,
            name: route_name_prefix + "All",
        },
        {
            path: "edit/:id",
            component: Edit,
            name: route_name_prefix + "Edit",
        },
        {
            path: "show/:id",
            component: Show,
            name: route_name_prefix + "Show",
        },
    ],
};

export default router;
