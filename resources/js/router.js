
//-- Import vue-router
import {createRouter, createWebHistory} from 'vue-router'

const routes = [
    {path: '/home/:link', name: 'Home', component: () => import('./components/RouterComponents/HomePage.vue'), props: true},
    {path: '/', name: 'Register', component: () => import('./components/Auth/Register.vue')},
    {path: '/admins_panel', name: 'Admin', component: () => import('./components/Menu/MenuComponent.vue')},

]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
