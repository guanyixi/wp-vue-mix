import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from './views/Home.vue'
import About from './views/About.vue'


//Router
const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '', component: Home },
        { path: '/about', component: About }
    ]
});

export default router