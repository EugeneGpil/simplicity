import ROUTE_NAMES from 'src/ship/consts/route-names';

const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      {
        path: '',
        name: ROUTE_NAMES.HOME,
        component: () => import('pages/IndexPage.vue')
      },
      {
        path: '/login',
        name: ROUTE_NAMES.LOGIN,
        component: () => import('pages/LoginPage.vue')
      },
      {
        path: '/register',
        name: ROUTE_NAMES.REGISTER,
        component: () => import('pages/RegisterPage.vue')
      },
    ],
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
