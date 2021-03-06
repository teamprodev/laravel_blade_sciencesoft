/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!**************************************************!*\
  !*** ./resources/assets/js/products/products.js ***!
  \**************************************************/


var tableName = '#productsTable';
$(tableName).DataTable({
  scrollX: true,
  deferRender: true,
  scroller: true,
  processing: true,
  serverSide: true,
  'order': [[0, 'asc']],
  ajax: {
    url: recordsURL
  },
  columnDefs: [{
    'targets': [6],
    'orderable': false,
    'className': 'text-center',
    'width': '8%'
  }],
  columns: [{
    data: 'name',
    name: 'name'
  }, {
    data: 'title',
    name: 'title'
  }, {
    data: 'sub_title',
    name: 'sub_title'
  }, {
    data: 'read_more_link',
    name: 'read_more_link'
  }, {
    data: 'view_website_link',
    name: 'view_website_link'
  }, {
    data: 'image',
    name: 'image'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#productsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Product');
});
/******/ })()
;