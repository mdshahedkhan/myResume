require('bootstrap')
import Vue from "vue";
import VueRouter from "vue-router";
import Router from "./Router";
import Vuex from "vuex";
import VueStore from "./VueStore";

Vue.use(Vuex)
Vue.use(VueRouter)

const router = new VueRouter({
    mode: "history",
    routes: Router
});

const store  = new Vuex.Store(VueStore)



const app = new Vue({
    router: router,
    store
});

app.$mount('#app');

const DefaultTitle = "Resume";
router.afterEach((to, from) => {
    Vue.nextTick(() => {
        document.title = to.meta.title || DefaultTitle
    })
})
