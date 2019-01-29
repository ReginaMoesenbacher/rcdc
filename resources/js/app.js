/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

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

$('.ingredient_list').on('change', function () {

    let $checkBox = $(this).find('input');
    let $list_class = $(this).find('span').attr('class');
    let $list = $(this).find('span');
    let $cloneList = $list.clone();
    let $clonedList = $('.cart_ingredients');
    let $form = $('#buyMixit');

    if ($checkBox.is(":checked")) {

        if ($counter < 5) {
            $counter++
            $clonedList.length,
                $clonedList.append(
                    $('<input>').attr({
                        class: $list_class,
                        name: $cloneList.text(),
                        value: $cloneList.text(),
                    }).appendTo($form)
                );

        }

    } else if (!($checkBox.is(":checked"))) {
        console.log($list_class);
        $counter--
        // console.log('unchecked');
        // console.log($liid);
        $clonedList.find("." + $list_class).remove();

    }


    if ($counter == 5) {
        $('.ingredient_list').find('input').not(':checked').attr("disabled", true);
    } else if ($counter < 5) {
        $('.ingredient_list').find('input').not(':checked').attr("disabled", false);
    }


})


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

$('.currency').on('change', function () {
    $('.creditcart').toggle();
})


/*----------------------------------------------*\
                     Animation
\*----------------------------------------------*/


//
// if (document.getElementById('bodymovin')) {
//     lottie.loadAnimation({
//         container: document.getElementById('bodymovin'), // the dom element that will contain the animation
//         renderer: 'svg',
//         loop: true,
//         autoplay: true,
//         path: '/images/animation//data.json' // the path to the animation json
//     });
//
// }

const selected = [];
let configObj = {
    container: document.getElementById('bodymovin'),
    renderer: "svg",
    loop: false,
    autoplay: false,
    path: "/images/animation/data.json",
};

let animation = lottie.loadAnimation(configObj);

const addingridients = {
    path: function (id) {
        const test = document.getElementById('bodymovin');
        test.innerHTML = '';
        configObj.path = "/images/animation/data"+ id+ ".json";
        configObj.loop = true;
        configObj.autoplay = true;
        const animation = lottie.loadAnimation(configObj);
    }
};

$('.ingredient_input').change(function () {

    if ($(this).is(':checked')) {
        selected.push($(this).val());
    } else if (!($(this).is(':checked'))){
        selected.splice($(this).val());
    }

    if (selected.length == 1) {
        addingridients.path(1)
    } else if (selected.length == 2) {
        addingridients.path(2)
    } else if (selected.length == 3) {
        addingridients.path(3)
    } else if (selected.length == 4) {
        addingridients.path(4)
    } else if (selected.length == 5) {
        addingridients.path(5)
    }


})


