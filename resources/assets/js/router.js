import Router from 'vue-router';

 import Example from './components/Example.vue';


const routes = [
  { path: '/example', component: Example },
];

export default new Router({
  routes,
});
