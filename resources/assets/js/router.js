import Router from 'vue-router';


const routes = [
  { path: '/example', component: require('./components/Example.vue') },
];

export default new Router({
  routes,
});
