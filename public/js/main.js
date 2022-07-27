/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.addEventListener('DOMContentLoaded', function (event) {
  // Toggle the side navigation
  var sidebarToggle = document.body.querySelector('#sidebarToggle');

  if (sidebarToggle) {
    sidebarToggle.addEventListener('click', function (event) {
      event.preventDefault();
      document.body.classList.toggle('sb-sidenav-toggled');
      localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
    });
  }
});

$('#add-news-btn').on('click', function () {
  var title = $('#title').val();
  var body = $('#body').val();
  var date = $('#date').val();

  if (title == '' || body == '' || date == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#add-training-btn').on('click', function () {
  var title = $('#title').val();
  var start = $('#startDate').val();
  var end = $('#endDate').val();
  var venue = $('#venue').val();
  var objective = $('#courseObj').val();
  var message = $('#body').val();
  var image = $('#image').val();

  if (title == '' || start == '' || end == '' || venue == '' || objective == '' || message == '' || image == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the required fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  } else if (Date.parse(start) - Date.parse(end) >= 0) {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Invalid date range!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#edit-training-btn').on('click', function () {
  var start = $('#startDate').val();
  var end = $('#endDate').val();

  if (Date.parse(start) - Date.parse(end) > 0) {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Invalid date range!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#add-secretariat-btn').on('click', function () {
  var name = $('#name').val();
  var position = $('#position').val();
  var image = $('#image').val();

  if (name == '' || position == '' || image == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#edit-secretariat-btn').on('click', function () {
  var name = $('#name').val();
  var position = $('#position').val();

  if (name == '' || position == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#add-directors-btn').on('click', function () {
  var name = $('#name').val();
  var category = $('#category').val();
  var position = $('#position').val();
  var image = $('#image').val();

  if (name == '' || position == '' || category == '' || image == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the required fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#edit-directors-btn').on('click', function () {
  var name = $('#name').val();
  var category = $('#category').val();
  var position = $('#position').val();

  if (name == '' || position == '' || category == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the required fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#add-council-btn').on('click', function () {
  var name = $('#name').val();
  var detail = $('#detail').val();
  var image = $('#image').val();

  if (name == '' || detail == '' || image == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the required fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#edit-council-btn').on('click', function () {
  var name = $('#name').val();
  var detail = $('#detail').val();

  if (name == '' || detail == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the required fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

window.fileImageValidation = function () {
  var fileInput = document.getElementById('image');

  var filePath = fileInput.value;

  // Allowing file type
  var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

  // File Size validation
  if (typeof (fileInput.files) != "undefined") {
      var size = parseFloat(fileInput.files[0].size / (1024 * 1024)).toFixed(2);
      if (size > 10) {
          Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Please select a file with less than 10 MB!',
            confirmButtonColor: '#2a2f89'
          });
          fileInput.value = '';
          return false;
      } else if (!allowedExtensions.exec(filePath)) {
          Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Only upload .jpg/.jpeg/.png files!',
            confirmButtonColor: '#2a2f89'
          });
          fileInput.value = '';
          return false;
      }
  } else {
      alert("This browser does not support HTML5.");
  }
}

window.multipleImageValidation = function () {
  var fileInput = document.getElementById('images');

  var filePath = fileInput.value;

  // Allowing file type
  var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

  const maxAllowedSize = 10 * 1024 * 1024;

  // File Size validation
  Array.from(fileInput.files).forEach(file => {
      //var size = parseFloat(fileInput.files[0].size / (1024 * 1024)).toFixed(2);
      if (file.size > maxAllowedSize) {
          Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Please select a file with less than 10 MB!',
            confirmButtonColor: '#2a2f89'
          });
          fileInput.value = '';
          return false;
      } else if (!allowedExtensions.exec(filePath)) {
          Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Only upload .jpg/.jpeg/.png files!',
            confirmButtonColor: '#2a2f89'
          });
          fileInput.value = '';
          return false;
      }
  })
}

window.multipleFileValidation = function () {
  var fileInput = document.getElementById('files');

  // Allowing file type

  const maxAllowedSize = 30 * 1024 * 1024;

  // File Size validation
  Array.from(fileInput.files).forEach(file => {
      //var size = parseFloat(fileInput.files[0].size / (1024 * 1024)).toFixed(2);
      if (file.size > maxAllowedSize) {
          Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Please select a file with less than 30 MB!',
            confirmButtonColor: '#2a2f89'
          });
          fileInput.value = '';
          return false;
      }
  })
}

$('#add-gallery-btn').on('click', function () {
  var title = $('#title').val();
  var caption = $('#caption').val();
  var date = $('#date').val();

  if (title == '' || caption == '' || date == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#add-downloads-btn').on('click', function () {
  var title = $('#title').val();
  var category = $('#category').val();
  var files = $('#files').val();

  if (title == '' || category == '' || files == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$(document).ready( function () {
  $('#myTable').DataTable();
})

$(document).ready( function () {
  $('#myTable').TableCheckAll();
  $('#multi-delete').on('click', function() {
    var button = $(this);
    var selected = [];
    $('#myTable .check:checked').each(function() {
      selected.push($(this).val());
    });
    Swal.fire({
      icon: 'warning',
        title: 'Are you sure you want to delete the selected record(s)?',
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        $.ajax({
          type: 'post',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: button.data('route'),
          data: {
            'selected': selected
          },
          success: function (response, textStatus, xhr) {
            Swal.fire({
              icon: 'success',
                title: 'Records were successfully deleted!',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Yes'
            }).then((result) => {
              location.reload()
            });
          }
        });
      }
    });
  });
})

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Christine Manabat\OneDrive\Documents\COLLEGE\4th Year\3rd Term\Cobra iTech\Projects\agia-website\resources\js\main.js */"./resources/js/main.js");


/***/ })

/******/ });