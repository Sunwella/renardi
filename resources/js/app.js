import Vue from 'vue'
import VueRouter from 'vue-router'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import App from './admin/App.vue'
import Products from './admin/pages/products/App.vue'
import ProductForm from './admin/pages/products/ProductForm.vue'
import Categories from './admin/pages/categories/App.vue'
import CategoryForm from './admin/pages/categories/CategoryForm.vue'
import Brands from './admin/pages/brands/App.vue'
import BrandForm from './admin/pages/brands/BrandForm.vue'

Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

const routes = [
	{ path: '/admin/products', component: Products },
	{ path: '/admin/products/create', component: ProductForm },
	{ path: '/admin/products/edit/:id', component: ProductForm },
	{ path: '/admin/categories', component: Categories },
	{ path: '/admin/categories/careate', component: CategoryForm },
	{ path: '/admin/categories/edit/:id', component: CategoryForm },
	{ path: '/admin/brands', component: Brands },
	{ path: '/admin/brands/create', component: BrandForm },
	{ path: '/admin/brands/edit/:id', component: BrandForm },

]

const router = new VueRouter ({
	mode: 'history',
	routes
});

new Vue({
	router,
	render: h => h(App),
}).$mount('#app')