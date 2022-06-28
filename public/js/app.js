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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/css/main.css":
/*!********************************!*\
  !*** ./resources/css/main.css ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*require('./bootstrap'); */

/* ICONS FOR MOBILE NAVBAR TOGGLER */
$(document).ready(function () {
  $('.fa-times').hide();
  var toggle = false;
  $('.navbar-toggler').on('click', function () {
    toggle = !toggle;

    if (toggle == true) {
      $('.fa-times').show();
      $('.fa-bars').hide();
    } else {
      $('.fa-times').hide();
      $('.fa-bars').show();
    }
  });
});
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

$('#contactus-btn').on('click', function () {
  var name = $('#name').val();
  var email = $('#email').val();
  var subject = $('#subject').val();
  var message = $('#message').val();
  var mail_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (name == '' || email == '' || subject == '' || message == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  } else if (!email.match(mail_format)) {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please enter a valid email',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#membership-btn').on('click', function () {
  var name = $('#name').val();
  var email = $('#email').val();
  var password = $('#password').val();
  let resume = $('#cv').val();
  var mail_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (name == '' || email == '' || password == '' || resume == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  } else if (!email.match(mail_format)) {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please enter a valid email',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  }
});

$('#update-membership-btn').on('click', function () {
  let currpwd = $('#password').val();
  let npwd = $('#newPassword').val();
  let cpwd = $('#confPassword').val();

  if (currpwd == '' || npwd == '' || cpwd == '') {
    Swal.fire({
      icon: 'error',
      title: 'Error!',
      text: 'Please fill up the fields!',
      confirmButtonColor: '#2a2f89'
    });
    return false;
  } else if (currpwd == npwd) {
      Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: 'Your new password cannot be the same with your current password!',
        confirmButtonColor: '#2a2f89'
      });
      return false;
  } else if (npwd != cpwd) {
      Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: 'Passwords do not match!',
        confirmButtonColor: '#2a2f89'
      });
      return false;
  }
});

window.fileValidation = function () {
  var fileInput = document.getElementById('cv');

  var filePath = fileInput.value;

  // Allowing file type
  var allowedExtensions = /(\.doc|\.docx|\.pdf)$/i;

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
            text: 'Only upload .doc/.docx/.pdf files!',
            confirmButtonColor: '#2a2f89'
          });
          fileInput.value = '';
          return false;
      }
  } else {
      alert("This browser does not support HTML5.");
  }
}

/***/ }),

/***/ 0:
/*!************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/css/app.css ./resources/css/main.css ***!
  \************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\Christine Manabat\OneDrive\Documents\COLLEGE\4th Year\3rd Term\Cobra iTech\Projects\agia-website\resources\js\app.js */"./resources/js/app.js");
__webpack_require__(/*! C:\Users\Christine Manabat\OneDrive\Documents\COLLEGE\4th Year\3rd Term\Cobra iTech\Projects\agia-website\resources\css\app.css */"./resources/css/app.css");
module.exports = __webpack_require__(/*! C:\Users\Christine Manabat\OneDrive\Documents\COLLEGE\4th Year\3rd Term\Cobra iTech\Projects\agia-website\resources\css\main.css */"./resources/css/main.css");


/***/ })

/******/ });