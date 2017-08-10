import Router from 'vue-router';

const routerView = {
  template: '<router-view></router-view>',
};

const router = new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      redirect: '/dashboard/all',
    },
    {
      path: '/example',
      component: require('./components/Example.vue'),
    },
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
  ],
});

// router.beforeEach((to, from, next) => {
//   if (to.meta.requiresAuth) {
//     // this route requires auth, check if logged in
//     // if not, redirect to login page.
//     if (!sessionStorage.getItem('accessToken')) {
//       next({
//         path: '/login',
//         query: { redirect: to.fullPath },
//       });
//     } else {
//       next();
//     }
//   } else {
//     next(); // 确保一定要调用 next()
//   }
// });

export default router;
