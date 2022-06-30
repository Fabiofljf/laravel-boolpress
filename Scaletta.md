# Esercizio laravel-boolpress
1. Clono repo + cancello git;
2. Creo .env e collego il database + mail;
3. Lancio composer e le dipendenze + composer require laravel/ui:^2.4;
4. Genero key;
5. Copio la cartella delle img di storage (che sono in locale) e lancio php artisan storage:link;
6. Lancio serve + watch;

## istallate vue router versione 3 npm i vue-router@3
1. Installare vue router:
- npm i vue-router@3;

## seguite gli steps per configuare la parte di javascript descritti in getting started JS (https://v3.router.vuejs.org/guide/#javascript)
## Create i componenti per le pagine da mappare alle rotte
## Modificate il componente principale views/App.vue inserendo i componenti di vue-router descritti in getting started ## HTML (https://v3.router.vuejs.org/guide/#html)
## Ricordatevi che dentro App.vue c'é il codice che abbiamo usato per mostrare tutti i posts del blog, spostate tutto in un componente dedicato a questo scopo.
## Definite i componenti delle pagine statiche a piacere Home, About
## Definite il componente della pagina dei posts
## Definite rotta vue per mostrare il singolo post e creare il componente pagina da abbinargli
## Per mostrare i dati nella pagina del singolo post vi occorrerá fare una chiamata ajax ad un nuovo endpoint che dovete definire in api.php e che deve restituire il json di un singolo post richeisto tramite il parametro slug.

1. Creare un file router.js e inserire:

// 0. If using a module system (e.g. via vue-cli), import Vue and VueRouter
// and then call `Vue.use(VueRouter)`.
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// 1. Define route components.
// These can be imported from other files
const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [
  { path: '/foo', component: Foo },
  { path: '/bar', component: Bar }
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
  routes // short for `routes: routes`
})

// 4. Create and mount the root instance.
// Make sure to inject the router with the router option to make the
// whole app router-aware.
const app = new Vue({
  router
}).$mount('#app')

// Now the app has started!

2. Modificare le rotte;
3. Creo l'istanza router;
4. Provvedo per l'esportazione;
5. Importo in front.js
6. Creo una cartella Pages dentro js dove incollo i collegamenti;
7. Sposto tutto da app.js a posts.js e inserisco <router-view></router-view> in app.js per non refreshare;
8. Aggiungo mode: 'history', a router per l'URL;
9. Aggiungo i link di navigazione in app.js;
10. Strutturo la nav;
11. 