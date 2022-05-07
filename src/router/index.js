import { createRouter, createWebHistory } from 'vue-router'
import Inicio from '../components/Inicio.vue'
import IniciarSesion from '../components/IniciarSesion.vue'
import Registro from '../components/Registro.vue'
import Creadores from '../views/Creadores.vue'
import Guia from '@/views/Guia.vue'
import Ranking from '@/views/Ranking.vue'
import Home from '@/views/Home.vue'

/* function protegerRutas(to, from, next){

  var isAutentificado = false;
  if(localStorage.getItem('login')){
      isAutentificado = true;
  }
  else
      isAutentificado = false;

  if(isAutentificado){
      next()
  }
  else{
      next ('../IniciarSesion');
  }
} */


const routes = [
  {
    path: '/',
    name: 'Inicio',
    //beforeEnter: protegerRutas,
    component: Inicio,
    //meta: { title: 'Inicio' }
  },
  {
    path: '/IniciarSesion',
    name: 'IniciarSesion',
    component: IniciarSesion,
    meta: { title: 'IniciarSesion' }
  },
  {
    path: '/Registro',
    name: 'Registro',
    // beforeEnter : protegerRutas,
    // meta: {title: Registro},
    component: Registro
  },
  {
    path: '/Creadores',
    name: 'Creadores',
   // beforeEnter: protegerRutas,
    meta: { title: 'Creadores' },
    component: Creadores
  },
  {
    path: '/Ranking',
    name: 'Ranking',
    //component: Ranking
    //beforeEnter: protegerRutas,
    component: Ranking,
    meta: { title: 'Ranking' }
  },
  {
    path: '/Guia',
    name: 'Guia',
    component: Guia
  },
  {
    path: '/Home',
    name: 'Home',
    component: Home
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
