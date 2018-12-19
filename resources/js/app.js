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

Vue.component('drinks', require('./components/CategoryComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


let $counter = 0;

$('.text').on('change', function () {

    $checkBox = $(this).find('input');
    let $list_class = $(this).find('span').attr('class');
    let $list = $(this).find('span');
    let $cloneList = $list.clone();
    let $clonedList = $('.cart_ingredients');


    if ($checkBox.is(":checked")) {

        if ($counter < 5) {
            $counter++
            console.log($clonedList.length)
            // console.log('added')
            // console.log($liid);
            $clonedList.append($cloneList);
        }

    } else if (!($checkBox.is(":checked"))) {
        $counter--
        // console.log('unchecked');
        // console.log($liid);
        $clonedList.find('span.' + $list_class).remove();

    }


    if ($counter == 5) {
        $('.text').find('input').not(':checked').attr("disabled", true);
    } else if ($counter < 5) {
        $('.text').find('input').not(':checked').attr("disabled", false);
    }


})

$('#buy').on('click', function (event) {
    event.preventDefault();

    var cart = {};

    var cartItems = $('.cart_ingredients span');

    cartItems.each(function (index) {
        cart[index] = ($(this).text());
    });

    //console.log(cart);
    $.ajax({
        type: "POST",
        url: "/buyMixit",
        data: {cart: cart},
        dataType: 'json',
    });



})
