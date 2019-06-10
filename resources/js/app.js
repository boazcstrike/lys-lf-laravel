require('./bootstrap');
require('admin-lte');

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

import Vue from 'vue'
import VueRouter from 'vue-router';
import routes from './routes'
import adminRoutes from './adminRoutes'
import topnav from './components/TopNav'

Vue.use(VueRouter)

const router = new VueRouter({
    routes
})

const adminRouter = new VueRouter({
    adminRoutes
})

// Vue.component('landing-component', require('./views/Landing.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        topnav
    },
    router,
})

const adminApp = new Vue({
    el: '#admin',
    adminRouter,
})

$(function () {
    $(document).scroll(function () {
        var $nav = $(".lys-nav");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});