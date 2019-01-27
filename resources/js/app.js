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


// let $animData = {
//     wrapper: document.getElementById('bodymovin'),
//     render: 'svg',
//     loop: true,
//     prerender: true,
//     autoplay: true,
//     path: '/images/animation/cocktail2.json',
// };
// let $anim = bodymovin.loadAnimation($animData);
//

// lottie.loadAnimation({
//     container: document.getElementById('bodymovin'), // the dom element that will contain the animation
//     renderer: 'svg',
//     loop: true,
//     autoplay: true,
//     path: 'data.json' // the path to the animation json
// });


var animationData = {"v":"5.3.4","fr":25,"ip":0,"op":750,"w":1920,"h":1080,"nm":"Cocktail","ddd":0,"assets":[{"id":"image_0","w":280,"h":566,"u":"images/","p":"img_0.png","e":0},{"id":"image_1","w":314,"h":810,"u":"images/","p":"img_1.png","e":0},{"id":"image_2","w":1921,"h":1081,"u":"images/","p":"img_2.png","e":0}],"layers":[{"ddd":0,"ind":1,"ty":4,"nm":"Formebene 1","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[960,540,0],"ix":2},"a":{"a":0,"k":[0,0,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"hasMask":true,"masksProperties":[{"inv":false,"mode":"a","pt":{"a":0,"k":{"i":[[0,0],[7.05,-92.051],[8.295,-43.033],[10.25,-50],[-0.512,-14.247],[-32.497,-28.772],[-28.957,0],[-19.684,17.312],[-1.216,29.112],[3.42,15.366],[4.851,26.218],[2.564,36.754],[0,0]],"o":[[0,0],[-2.869,37.456],[-7.254,37.629],[-4.332,21.132],[1.057,29.432],[27.139,24.029],[39.997,0],[22.51,-19.797],[0.643,-15.389],[-11.575,-51.997],[-7.218,-39.011],[-6.556,-93.982],[0,0]],"v":[[-102.469,-340.5],[-94.55,-179.449],[-107.795,-62.467],[-126.75,17.5],[-128.469,63.266],[-79.503,172.272],[0.503,206.278],[82.49,169.297],[128.469,65.766],[127.075,18.497],[108.718,-60.489],[92.556,-180.518],[102.969,-340]],"c":true},"ix":1},"o":{"a":0,"k":100,"ix":3},"x":{"a":0,"k":0,"ix":4},"nm":"Maske 1"}],"shapes":[{"ty":"gr","it":[{"ty":"rc","d":1,"s":{"a":0,"k":[639.938,230.766],"ix":2},"p":{"a":0,"k":[0,0],"ix":3},"r":{"a":0,"k":0,"ix":4},"nm":"Rechteckpfad: 1","mn":"ADBE Vector Shape - Rect","hd":false},{"ty":"tm","s":{"a":0,"k":0,"ix":1},"e":{"a":0,"k":94,"ix":2},"o":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"n":["0p833_0p833_0p167_0p167"],"t":0,"s":[-5],"e":[233.507]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"n":["0p833_0p833_0p167_0p167"],"t":66,"s":[233.507],"e":[264]},{"t":68}],"ix":3},"m":1,"ix":3,"nm":"Pfade trimmen 1","mn":"ADBE Vector Filter - Trim","hd":false},{"ty":"st","c":{"a":0,"k":[1,0,0,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":10,"ix":5},"lc":2,"lj":1,"ml":4,"ml2":{"a":0,"k":4,"ix":8},"nm":"Kontur 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"fl","c":{"a":0,"k":[1,0,0,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"nm":"Fläche 1","mn":"ADBE Vector Graphic - Fill","hd":false},{"ty":"tr","p":{"a":1,"k":[{"i":{"x":0.833,"y":0.833},"o":{"x":0.167,"y":0.167},"n":"0p833_0p833_0p167_0p167","t":0,"s":[120,213.383],"e":[-120,213.383],"to":[-40,0],"ti":[40,0]},{"t":67}],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transformieren"}],"nm":"Rechteck 1","np":5,"cix":2,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":0,"op":750,"st":0,"bm":0},{"ddd":0,"ind":2,"ty":2,"nm":"Outline/Cocktail.ai","cl":"ai","refId":"image_0","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[960,480,0],"ix":2},"a":{"a":0,"k":[140,283,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":750,"st":0,"bm":0},{"ddd":0,"ind":3,"ty":2,"nm":"Cocktail","refId":"image_1","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[959.919,578,0],"ix":2},"a":{"a":0,"k":[156.637,404.75,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"ip":0,"op":750,"st":0,"bm":0},{"ddd":0,"ind":4,"ty":2,"nm":"Background","refId":"image_2","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[960.022,540,0],"ix":2},"a":{"a":0,"k":[960.25,540.25,0],"ix":1},"s":{"a":0,"k":[103.851,108.692,100],"ix":6}},"ao":0,"ip":0,"op":750,"st":0,"bm":0}],"markers":[]};
var params = {
    container: document.getElementById('bodymovin'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    animationData: animationData
};

var anim;

anim = lottie.loadAnimation(params);




