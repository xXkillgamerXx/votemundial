require('./bootstrap');

window.Vue = require('vue').default;

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import Vue from 'vue';
export const eventBus = new Vue(); // creating an event bus.


Vue.component('timer', require('./components/Timer.vue').default);
Vue.component('like', require('./components/Like.vue').default);
Vue.component('likes', require('./components/Likes.vue').default);

const app = new Vue({
    el: '#app',
});
