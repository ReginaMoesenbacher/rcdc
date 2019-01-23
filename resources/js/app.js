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


let $animData = {
    wrapper: document.getElementById('bodymovin'),
    render: 'svg',
    loop: true,
    prerender: true,
    autoplay: true,
    path: '/images/animation/cocktail2.json',
};
let $anim = bodymovin.loadAnimation($animData);





// let $animationData = {"v":"5.3.4","fr":25,"ip":0,"op":750,"w":1920,"h":1080,"nm":"Cocktail 2","ddd":0,"assets":[{"id":"image_0","w":260,"h":548,"u":"images/","p":"img_0.png","e":0},{"id":"image_1","w":280,"h":566,"u":"images/","p":"img_1.png","e":0},{"id":"image_2","w":314,"h":810,"u":"images/","p":"img_2.png","e":0},{"id":"image_3","w":1921,"h":1081,"u":"images/","p":"img_3.png","e":0}],"layers":[{"ddd":0,"ind":1,"ty":2,"nm":"Maske","refId":"image_0","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[960.715,473.951,0],"ix":2},"a":{"a":0,"k":[129.68,273.755,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":750,"st":0,"bm":0},{"ddd":0,"ind":2,"ty":2,"nm":"Outline","refId":"image_1","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[960.715,473.951,0],"ix":2},"a":{"a":0,"k":[139.936,282.684,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":750,"st":0,"bm":0},{"ddd":0,"ind":3,"ty":2,"nm":"Cocktail","refId":"image_2","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[960.715,577.512,0],"ix":2},"a":{"a":0,"k":[156.637,404.738,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":750,"st":0,"bm":0},{"ddd":0,"ind":4,"ty":2,"nm":"Background","refId":"image_3","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[960,540,0],"ix":2},"a":{"a":0,"k":[960.25,540.25,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":750,"st":0,"bm":0}],"markers":[]}
// let $container = document.getElementById('bodymovin');
// // Set up our animation
// let $animData = {
//     container: $container,
//     render: 'svg',
//     loop: true,
//     prerender: true,
//     autoplay: true,
//     animationData: $animationData
// };
//  $anim = bodymovin.loadAnimation($animData);
//  $anim = bodymovin.play();




