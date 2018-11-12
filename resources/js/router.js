import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'dashboard',
      component: require('./components/Dashboard.vue'),
    },
    {
      path: '/example',
      name: 'example',
      component: require('./components/ExampleComponent.vue')
    },
    {
      path: '/profile',
      name: 'profile',
      component: require('./components/Profile.vue')
    },
  ]
})
