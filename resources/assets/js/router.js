import Router from 'vue-router';

const routerView = {
  template: '<router-view></router-view>',
};

const routes = [
  { path: '/', redirect: '/dashboard/all' },
  { path: '/example', component: require('./components/Example.vue') },

  {
    path: '/behavior',
    component: routerView,
    children: [
      { path: 'event', component: require('./pages/behavior/EventAnalysis.vue') },
    ],
  },

  {
    path: '/dashboard',
    component: routerView,
    children: [
      { path: 'all', component: require('./pages/dashboard/All.vue') },
    ],
  },
];

export default new Router({
  routes,
});
