
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./coverflow');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('drinks', require('./components/DrinksComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// coverflow('player').setup({
//     flash: "https://luwes.github.io/js-cover-flow/coverflow.swf",
//     playlist:"https://www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita",
//     width: '100%',
//     height: 250,
//     y: -20,
//     backgroundcolor: "ffffff",
//     coverwidth: 180,
//     coverheight: 150,
//     fixedsize: true,
//     textoffset: 50,
// })
