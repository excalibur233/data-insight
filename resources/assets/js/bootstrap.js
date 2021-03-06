import lodash from 'lodash';
import jQuery from 'jquery';
import axios from 'axios';
import Vue from 'vue';

window._ = lodash;
window.$ = jQuery;
window.jQuery = jQuery;
window.jquery = jQuery;


window.Vue = Vue;

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
  window.$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': token.content,
    },
  });
} else {
// eslint-disable-next-line no-console
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
