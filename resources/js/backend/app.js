import './bootstrap';
import { createApp } from 'vue';
import {backend_vue_router} from './router';
import AppComponent from './views/layout/AppComponent.vue';

const app = createApp({});

app.component('app-component', AppComponent);

app.use(backend_vue_router);
app.mount('#app');
