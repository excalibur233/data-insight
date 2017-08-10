import Vue from 'vue';
import Vuex from 'vuex';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-default/index.css';
import VCharts from 'v-charts';

import './bootstrap';
import router from './router';
import App from './layouts/App.vue';


Vue.use(ElementUI);
Vue.use(Vuex);
Vue.use(VCharts);

// eslint-disable-next-line no-new
new Vue({
  el: '#app',
  components: {
    app: App,
  },
  router,
});
