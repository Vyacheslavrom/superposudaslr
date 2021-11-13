require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import app from './components/app'
import home from './components/home'
import desks from './components/desks/desks'

const router =new VueRouter ({
   mode: 'history',
   routes: [
      {
         path: '/home',
         name:  'home',
         component: home
      },
      {
         path: '/desks',
         name:  'desks',
         component: desks
      },


   ]


})

const app1 = new Vue({

   el: '#app',
   components:{app},
   router
    
})