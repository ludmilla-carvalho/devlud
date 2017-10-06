/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')
// require('./gentelella/vendors/nprogress')
// require('./gentelella/vendors/fastclick')
// require('./gentelella/smartresize')
// require('./gentelella/custom')

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

window.Datatable = require('datatables.net')
window.DtReorder = require('datatables.net-rowreorder')

$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })

  $('#datatable-custom').DataTable({
    // columnDefs: [ { targets: 0, orderable: false, searchable: false } ]
    language: {
      info: '_START_ a _END_ de _TOTAL_ registros',
      infoEmpty: 'Sem registros',
      infoFiltered: 'filtrados de _MAX_ registros',
      emptyTable: 'Nenhum registro encontrado na tabela',
      zeroRecords: 'Nenhum registro encontrado na busca',
      lengthMenu: 'Mostrando _MENU_ registros',
      searchPlaceHolder: 'Filtro',
      search: 'Busca:',
      paginate: {
        first: 'Primeiro',
        last: 'Último',
        previous: 'Anterior',
        next: 'Próximo'
      }
    }
  })

  $('#datatable-skills').DataTable({
    "pageLength": 50,
    rowReorder: {
      selector: 'tr'
    },
    language: {
      info: '_START_ a _END_ de _TOTAL_ registros',
      infoEmpty: 'Sem registros',
      infoFiltered: 'filtrados de _MAX_ registros',
      emptyTable: 'Nenhum registro encontrado na tabela',
      zeroRecords: 'Nenhum registro encontrado na busca',
      lengthMenu: 'Mostrando _MENU_ registros',
      searchPlaceHolder: 'Filtro',
      search: 'Busca:',
      paginate: {
        first: 'Primeiro',
        last: 'Último',
        previous: 'Anterior',
        next: 'Próximo'
      }
    }
  }).on('row-reordered', function (e, diff, edit) {
    for (var i = 0, ien = diff.length; i < ien; i++) {
      var newPos = diff[i].newPosition + 1
      var id = diff[i].node.cells[1].innerText
      diff[i].node.cells[0].innerText = newPos

      $.ajax({
        url: '/admin/skills/order',
        dataType: 'json',
        type: 'post',
        contentType: 'application/json',
        data: JSON.stringify({ 'id': id, 'order': newPos }),
        processData: false,
        success: function (data, textStatus, jQxhr) {
          console.log('ok')
        },
        error: function (jqXhr, textStatus, errorThrown) {
          console.log(errorThrown)
        }
      })
    }
  })

  $('#datatable-portfolio').DataTable({
    "pageLength": 50,
    rowReorder: {
      selector: 'tr'
    },
    language: {
      info: '_START_ a _END_ de _TOTAL_ registros',
      infoEmpty: 'Sem registros',
      infoFiltered: 'filtrados de _MAX_ registros',
      emptyTable: 'Nenhum registro encontrado na tabela',
      zeroRecords: 'Nenhum registro encontrado na busca',
      lengthMenu: 'Mostrando _MENU_ registros',
      searchPlaceHolder: 'Filtro',
      search: 'Busca:',
      paginate: {
        first: 'Primeiro',
        last: 'Último',
        previous: 'Anterior',
        next: 'Próximo'
      }
    }
  }).on('row-reordered', function (e, diff, edit) {
    for (var i = 0, ien = diff.length; i < ien; i++) {
      var newPos = diff[i].newPosition + 1
      var id = diff[i].node.cells[1].innerText
      diff[i].node.cells[0].innerText = newPos

      $.ajax({
        url: '/admin/portfolio/order',
        dataType: 'json',
        type: 'post',
        contentType: 'application/json',
        data: JSON.stringify({ 'id': id, 'order': newPos }),
        processData: false,
        success: function (data, textStatus, jQxhr) {
          console.log('ok')
        },
        error: function (jqXhr, textStatus, errorThrown) {
          console.log(errorThrown)
        }
      })
    }
  })

  $('.form-delete').on('click', function (e) {
    e.preventDefault()
    var $form = $(this)
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
      .on('click', '#delete-btn', function () {
        $form.submit()
      })
  })
})
