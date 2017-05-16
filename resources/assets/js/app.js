/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VueRouter  from 'vue-router'
import router     from './router'
import Vue        from 'vue'

Vue.use(VueRouter)
window.bus = new Vue();

// lazy load components
import App from './Main.vue'

// Create and mount root instance.
// Make sure to inject the router.
// Route components will be rendered inside <router-view>.
new Vue({
	el: "#app",
	router,
	template: '<App/>',

	components: {
		App
	},

	data: {}

});