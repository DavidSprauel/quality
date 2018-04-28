/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });


require('./bulma-extensions');
require('jquery-countdown');

$(document).ready(() => {

    $('#countdown').find('p').countdown('2018/06/21 09:00', function (event) {
        if (window.lang == 'en') {
            var $this = $(this).html('European Quality Congress in <br>' + event.strftime(''
                + '<span>%w</span> weeks '
                + '<span>%d</span> days '
                + '<span>%H</span> hr '
                + '<span>%M</span> min '
                + '<span>%S</span> sec'));
        } else {
            var $this = $(this).html('Congrès Européen de la Qualité dans <br>' + event.strftime(''
                + '<span>%w</span> semaines '
                + '<span>%d</span> jours '
                + '<span>%H</span> hr '
                + '<span>%M</span> min '
                + '<span>%S</span> sec'));
        }
    });

    $('.tabsBlock').hide();

    let activeTab = $('.tabs').find('li.is-active');

    if (activeTab.length > 0) {
        let id = activeTab.find('a').attr('href');

        $('.tabs').find('li').removeClass('is-active');
        activeTab.addClass('is-active');

        $('.tabsBlock').hide();
        $(id).show();
    }


    $('.tabs').find('a').on('click', (e) => {
        let link = $(e.currentTarget);
        let bloc = link.attr('href');
        $('.tabs').find('li').removeClass('is-active');
        link.parent().addClass('is-active');

        $('.tabsBlock').hide();
        $(bloc).show();
    });

});
