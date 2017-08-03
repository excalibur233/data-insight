import Vue from 'vue';
import Vuex from 'vuex';

import './bootstrap';
import router from './router';
import App from './layouts/App.vue';

Vue.use(Vuex);
// eslint-disable-next-line no-new
new Vue({
  el: '#app',
  components: {
    app: App,
  },
  router,
});