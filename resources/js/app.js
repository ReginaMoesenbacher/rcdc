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


/*----------------------------------------------*\
                    Mixit
\*----------------------------------------------*/


let $counter = 0;

$('.text').on('change', function () {

    $checkBox = $(this).find('input');
    let $list_class = $(this).find('span').attr('class');
    let $list = $(this).find('span');
    let $cloneList = $list.clone();
    let $clonedList = $('.cart_ingredients');
    let $form = $('#buyMixit');


    if ($checkBox.is(":checked")) {

        if ($counter < 5) {
            $counter++
            $clonedList.length,
                // console.log('added')
                // console.log($liid);
                $clonedList.append(
                    $('<input>').attr({
                        class: $list_class,
                        name: $cloneList.text(),
                        value: $cloneList.text(),
                    }).appendTo($form)
        )
            ;

            console.log($cloneList.text())


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

// $('#buy').on('click', function (_e) {
//     _e.preventDefault();
//
//     var cart = {};
//
//     var cartItems = $('.cart_ingredients span');
//
//     cartItems.each(function (index) {
//         cart[index] = ($(this).text());
//     });
//
//     //console.log(cart);
//     $.ajax({
//         type: "POST",
//         url: "/api/buyMixit",
//         data: {cart},
//         dataType: 'json'
//
//     }).done(function (result) {
//         console.log("triggered", result);
//         window.location.href = "https://rcdc.test/cart";
//     }).fail(function (test) {
//         console.log(test);
//         alert("Sorry. Server unavailable. ");
//     });
//
//
// })


/*----------------------------------------------*\
                    Nav-Toggle
\*----------------------------------------------*/


$('.nav__toggle').on('click', function () {
    $('.sidebar').toggleClass('open');
});


/*----------------------------------------------*\
                    Shopping Cart delete
\*----------------------------------------------*/

$('#conditionList .delete').click(function () {

    $(this).parent().remove()

})

