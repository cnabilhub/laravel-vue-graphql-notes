
import '../css/app.css';

import './bootstrap';

import { createApp } from 'vue';
import apolloProvider from './apollo'

// APOLLO






// END Apollo
import router from './router'
import App from './components/app.vue'
createApp(App)
    .use(router)
    .use(apolloProvider)
    .mount('#app')
