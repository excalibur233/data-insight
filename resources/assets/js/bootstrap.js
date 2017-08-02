import lodash from 'lodash';
import jQuery from 'jquery';

window._ = lodash;
window.$ = window.jQuery = window.jquery = jQuery;

require('bootstrap-sass');
require('select2');
require('select2/dist/js/i18n/zh-CN');

require('../vendor/AdminLTE-2.4.0/dist/js/adminlte.min');

import axios from 'axios';
import Vue from 'vue';

window.Vue = Vue;

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
