import Router from 'vue-router';

const router_view = {
	template: '<router-view></router-view>'
};

const routes = [
	{path: '/', redirect: '/dashboard/all'},
	{path: '/example', component: require('./components/Example.vue')},

	{
		path: '/behavior', component: router_view,
		children: [
			{path: 'event', component: require('./pages/behavior/EventAnalysis.vue')}
		]
	},

	{
		path: '/dashboard', component: router_view,
		children: [
			{path: 'all', component: require('./pages/dashboard/All.vue')}
		]
	},
];

export default new Router({
	routes,
});
