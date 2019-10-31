import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter);

import Dashboard from './views/Dashboard.vue';
import Branch from './views/pages/branch/Branch.vue';
import Designation from './views/pages/designation/Designation.vue';


const router= new VueRouter({
    mode:'history',
    routes: 
        [
            {path: '/', name: 'dashboard', component: Dashboard},
            {path: '/branch', name: 'branch', component: Branch},
            {path: '/designation', name: 'designation', component: Designation},
        ],
})


export default router;