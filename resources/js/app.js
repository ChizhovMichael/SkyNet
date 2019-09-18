
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';


Vue.use(VueRouter);

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes),

    data: {
        json: {}
    },
    methods: {
        setJson(payload) {
            // Здесь находится наш json
            this.json = payload
        }
    }
});
