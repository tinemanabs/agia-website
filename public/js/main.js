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
  var venue = $('#venue').val();
  var objective = $('#courseObj').val();
  var message = $('#body').val();
  var image = $('#image').val();

  if (title == '' || start == '' || venue == '' || objective == '' || message == '' || image == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the required!',
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

$(document).ready( function () {
  $('#myTable').DataTable();
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