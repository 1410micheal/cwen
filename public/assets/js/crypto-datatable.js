/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/assets/js/crypto-datatable.js ***!
  \*************************************************/
var _$$DataTable;

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//______Data-Table
$('#crypto-data-table').DataTable((_$$DataTable = {
  "order": [[0, "desc"]]
}, _defineProperty(_$$DataTable, "order", []), _defineProperty(_$$DataTable, "columnDefs", [{
  orderable: false,
  targets: [0, 4, 5]
}]), _defineProperty(_$$DataTable, "language", {
  searchPlaceholder: 'Search...',
  sSearch: ''
}), _$$DataTable)); // Select2

$('.dataTables_length select').select2({
  minimumResultsForSearch: Infinity
});
/******/ })()
;