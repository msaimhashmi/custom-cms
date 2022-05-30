require('./bootstrap');

window.Vue = require('vue').default;


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('saim', require('./admin/task/create').default);
import VueRouter from 'vue-router';
import TaskIndex from './admin/task/Index';
import TaskCreate from './admin/task/Create';
Vue.use(VueRouter);

// const routes=[
// 	{path: '/admin/task', component:TaskIndex},
// 	{path: '/admin/task/create', component:TaskCreate}
// ]

const routes = [
	// { path: '/', component: require('./components/ExampleComponent.vue').default },
	// { path: '/user', component: require('./components/User.vue').default },
	{ path: '/', component:TaskIndex},
	{ path: '/create', component:TaskCreate}
]

const router = new VueRouter({
  routes 
})
  
// const app = new Vue({
//   router
// }).$mount('#app')

const app = new Vue({
    router,
    el: '#app'
});
