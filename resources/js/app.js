/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import { BootstrapVue } from 'bootstrap-vue'

Vue.use(BootstrapVue)

import '../../node_modules/bootstrap/dist/css/bootstrap.css'
import '../../node_modules/bootstrap-vue/dist/bootstrap-vue.css'
import '../sass/app.scss'

import { library } from '@fortawesome/fontawesome-svg-core'
import { faCheck, faPhone, faComments, faUser } from '@fortawesome/free-solid-svg-icons'
import { faFacebook, faTwitter, faGooglePlus } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faCheck);
library.add(faPhone);
library.add(faComments);
library.add(faUser);
library.add(faFacebook);
library.add(faTwitter);
library.add(faGooglePlus);

Vue.component('font-awesome-icon', FontAwesomeIcon)


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import HeadComponent from './components/HeadComponent.vue';
import NavigationBar from './components/NavigationBar.vue';
import Content from './components/Content.vue';
import ShareSection from './components/ShareSection.vue';
import Footer from './components/Footer.vue';

Vue.component('navigation-bar', NavigationBar);
Vue.component('head-component', HeadComponent);
Vue.component('content-component', Content);
Vue.component('share-section', ShareSection);
Vue.component('footer-section', Footer);

const app = new Vue({
    el: '#app',
});
