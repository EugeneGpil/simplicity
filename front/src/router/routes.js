import ROUTE_NAMES from 'src/consts/route-names';

const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      {
        path: '',
        name: ROUTE_NAMES.HOME,
        component: () => import('pages/IndexPage/index.vue')
      },
      {
        path: '/login',
        name: ROUTE_NAMES.LOGIN,
        component: () => import('pages/LoginPage/index.vue')
      },
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound/index.vue')
  }
]

export default routes
