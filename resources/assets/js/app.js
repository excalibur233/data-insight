import Vue from 'vue';
import Vuex from 'vuex'

import './bootstrap';
import router from './router';
import App from './layouts/App.vue';

Vue.use(Vuex);
new Vue({
	el: '#app',
	components: {
		app: App,
	},
	router,
});
