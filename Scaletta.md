# Esercizio laravel-boolpress
1. Clono repo + cancello git;
2. Creo .env e collego il database + mail;
3. Lancio composer e le dipendenze + composer require laravel/ui:^2.4;
4. Genero key;
5. Copio la cartella delle img di storage (che sono in locale) e lancio php artisan storage:link;
6. Lancio serve + watch;

## istallate vue router versione 3 npm i vue-router@3
## seguite gli steps per configuare la parte di javascript descritti in getting started JS (https://v3.router.vuejs.org/guide/#javascript)
## Create i componenti per le pagine da mappare alle rotte
## Modificate il componente principale views/App.vue inserendo i componenti di vue-router descritti in getting started ## HTML (https://v3.router.vuejs.org/guide/#html)
## Ricordatevi che dentro App.vue c'é il codice che abbiamo usato per mostrare tutti i posts del blog, spostate tutto in un componente dedicato a questo scopo.
## Definite i componenti delle pagine statiche a piacere Home, About
## Definite il componente della pagina dei posts
## Definite rotta vue per mostrare il singolo post e creare il componente pagina da abbinargli
## Per mostrare i dati nella pagina del singolo post vi occorrerá fare una chiamata ajax ad un nuovo endpoint che dovete definire in api.php e che deve restituire il json di un singolo post richeisto tramite il parametro slug.