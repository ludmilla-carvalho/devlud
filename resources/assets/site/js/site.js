
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

// window.Vue = require('vue')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*
Vue.component('example', require('./components/Example.vue'))

const app = new Vue({
  el: '#app'
})

*/

$(document).ready(function () {
  $('.hover-img').mouseover(function () {
    var id = $(this).data('id')
    $('#' + id).show()
  }).mouseout(function () {
    var id = $(this).data('id')
    $('#' + id).hide()
  })

  $('.hover-img').bind('touchstart', function(){
    var id = $(this).data('id');
    $('#'+id).show();
  });
  $('.hover-img').bind('touchend', function(){
    var id = $(this).data('id');
    $('#'+id).hide();
  });

  /*$('[data-toggle="popover"]').popover({
    html: true
  }) */
  $('.p_over').popover({html: true});

  $('.p_over').on('click', function (e) {
    $('.p_over').not(this).popover('hide');
  });
})
