
import '../css/app.css';

import './bootstrap';

import { createApp } from 'vue';

import router from './router'
import App from './components/app.vue'
createApp(App).use(router).mount('#app')
