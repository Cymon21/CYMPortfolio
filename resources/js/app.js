import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import PortfolioComponent from './components/PortfolioComponent.vue';
app.component('portfolio', PortfolioComponent);



app.mount('#app');
