/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/comments.js":
/*!**********************************!*\
  !*** ./resources/js/comments.js ***!
  \**********************************/
/***/ (() => {

eval("$(document).ready(function () {\n  $(\"#comment-form\").submit(function (e) {\n    var _this = this;\n\n    e.preventDefault();\n    console.log(this);\n    var id = $(\".main #articleId\").text();\n    var subject = $(\"#subject\", this).val();\n    var body = $(\"#body\", this).val();\n    var data = {\n      \"subject\": subject,\n      \"body\": body\n    };\n    $('#subject-error').slideUp();\n    $('#body-error').slideUp();\n    axios.post('/api/addComment/' + id, data).then(function (response) {\n      $(_this).trigger('reset');\n      $('#submit-btn').prop('disabled', true);\n      $('#comment-alert').slideDown();\n      $('#comment-alert p').html(response.data.message);\n      setTimeout(function () {\n        $('#comment-alert').slideUp();\n      }, 5000);\n    })[\"catch\"](function (error) {\n      if (error.response.status !== 422) {\n        console.log(error);\n        return;\n      }\n\n      var validationErrors = error.response.data.errors;\n      Object.keys(validationErrors).map(function (key) {\n        var msg = validationErrors[key][0];\n        var selector = \"#\" + key + \"-error\";\n        console.log(selector, key, msg);\n        $(selector).slideDown().text(msg);\n      });\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY29tbWVudHMuanM/M2M2ZSJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInN1Ym1pdCIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImNvbnNvbGUiLCJsb2ciLCJpZCIsInRleHQiLCJzdWJqZWN0IiwidmFsIiwiYm9keSIsImRhdGEiLCJzbGlkZVVwIiwiYXhpb3MiLCJwb3N0IiwidGhlbiIsInJlc3BvbnNlIiwidHJpZ2dlciIsInByb3AiLCJzbGlkZURvd24iLCJodG1sIiwibWVzc2FnZSIsInNldFRpbWVvdXQiLCJlcnJvciIsInN0YXR1cyIsInZhbGlkYXRpb25FcnJvcnMiLCJlcnJvcnMiLCJPYmplY3QiLCJrZXlzIiwibWFwIiwia2V5IiwibXNnIiwic2VsZWN0b3IiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVk7QUFDMUJGLEVBQUFBLENBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJHLE1BQW5CLENBQTBCLFVBQVVDLENBQVYsRUFBYTtBQUFBOztBQUNuQ0EsSUFBQUEsQ0FBQyxDQUFDQyxjQUFGO0FBQ0FDLElBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLElBQVo7QUFDQSxRQUFNQyxFQUFFLEdBQUdSLENBQUMsQ0FBQyxrQkFBRCxDQUFELENBQXNCUyxJQUF0QixFQUFYO0FBQ0EsUUFBTUMsT0FBTyxHQUFHVixDQUFDLENBQUMsVUFBRCxFQUFhLElBQWIsQ0FBRCxDQUFvQlcsR0FBcEIsRUFBaEI7QUFDQSxRQUFNQyxJQUFJLEdBQUdaLENBQUMsQ0FBQyxPQUFELEVBQVUsSUFBVixDQUFELENBQWlCVyxHQUFqQixFQUFiO0FBQ0EsUUFBTUUsSUFBSSxHQUFHO0FBQUMsaUJBQVdILE9BQVo7QUFBcUIsY0FBUUU7QUFBN0IsS0FBYjtBQUVBWixJQUFBQSxDQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQmMsT0FBcEI7QUFDQWQsSUFBQUEsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQmMsT0FBakI7QUFDQUMsSUFBQUEsS0FBSyxDQUFDQyxJQUFOLENBQVcscUJBQXFCUixFQUFoQyxFQUFvQ0ssSUFBcEMsRUFDS0ksSUFETCxDQUNVLFVBQUNDLFFBQUQsRUFBYztBQUNoQmxCLE1BQUFBLENBQUMsQ0FBQyxLQUFELENBQUQsQ0FBUW1CLE9BQVIsQ0FBZ0IsT0FBaEI7QUFDQW5CLE1BQUFBLENBQUMsQ0FBQyxhQUFELENBQUQsQ0FBaUJvQixJQUFqQixDQUFzQixVQUF0QixFQUFrQyxJQUFsQztBQUNBcEIsTUFBQUEsQ0FBQyxDQUFDLGdCQUFELENBQUQsQ0FBb0JxQixTQUFwQjtBQUNBckIsTUFBQUEsQ0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0JzQixJQUF0QixDQUEyQkosUUFBUSxDQUFDTCxJQUFULENBQWNVLE9BQXpDO0FBQ0FDLE1BQUFBLFVBQVUsQ0FBQyxZQUFZO0FBQ25CeEIsUUFBQUEsQ0FBQyxDQUFDLGdCQUFELENBQUQsQ0FBb0JjLE9BQXBCO0FBQ0gsT0FGUyxFQUVQLElBRk8sQ0FBVjtBQUdILEtBVEwsV0FVVyxVQUFDVyxLQUFELEVBQVc7QUFDZCxVQUFJQSxLQUFLLENBQUNQLFFBQU4sQ0FBZVEsTUFBZixLQUEwQixHQUE5QixFQUFtQztBQUMvQnBCLFFBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZa0IsS0FBWjtBQUNBO0FBQ0g7O0FBQ0QsVUFBTUUsZ0JBQWdCLEdBQUdGLEtBQUssQ0FBQ1AsUUFBTixDQUFlTCxJQUFmLENBQW9CZSxNQUE3QztBQUNBQyxNQUFBQSxNQUFNLENBQUNDLElBQVAsQ0FBWUgsZ0JBQVosRUFBOEJJLEdBQTlCLENBQWtDLFVBQUFDLEdBQUcsRUFBSTtBQUNyQyxZQUFNQyxHQUFHLEdBQUdOLGdCQUFnQixDQUFDSyxHQUFELENBQWhCLENBQXNCLENBQXRCLENBQVo7QUFDQSxZQUFNRSxRQUFRLEdBQUcsTUFBTUYsR0FBTixHQUFZLFFBQTdCO0FBQ0ExQixRQUFBQSxPQUFPLENBQUNDLEdBQVIsQ0FBWTJCLFFBQVosRUFBc0JGLEdBQXRCLEVBQTJCQyxHQUEzQjtBQUNBakMsUUFBQUEsQ0FBQyxDQUFDa0MsUUFBRCxDQUFELENBQVliLFNBQVosR0FBd0JaLElBQXhCLENBQTZCd0IsR0FBN0I7QUFDSCxPQUxEO0FBT0gsS0F2Qkw7QUF3QkgsR0FsQ0Q7QUFtQ0gsQ0FwQ0QiLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XG4gICAgJChcIiNjb21tZW50LWZvcm1cIikuc3VibWl0KGZ1bmN0aW9uIChlKSB7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgY29uc29sZS5sb2codGhpcyk7XG4gICAgICAgIGNvbnN0IGlkID0gJChcIi5tYWluICNhcnRpY2xlSWRcIikudGV4dCgpO1xuICAgICAgICBjb25zdCBzdWJqZWN0ID0gJChcIiNzdWJqZWN0XCIsIHRoaXMpLnZhbCgpO1xuICAgICAgICBjb25zdCBib2R5ID0gJChcIiNib2R5XCIsIHRoaXMpLnZhbCgpO1xuICAgICAgICBjb25zdCBkYXRhID0ge1wic3ViamVjdFwiOiBzdWJqZWN0LCBcImJvZHlcIjogYm9keX07XG5cbiAgICAgICAgJCgnI3N1YmplY3QtZXJyb3InKS5zbGlkZVVwKCk7XG4gICAgICAgICQoJyNib2R5LWVycm9yJykuc2xpZGVVcCgpO1xuICAgICAgICBheGlvcy5wb3N0KCcvYXBpL2FkZENvbW1lbnQvJyArIGlkLCBkYXRhKVxuICAgICAgICAgICAgLnRoZW4oKHJlc3BvbnNlKSA9PiB7XG4gICAgICAgICAgICAgICAgJCh0aGlzKS50cmlnZ2VyKCdyZXNldCcpO1xuICAgICAgICAgICAgICAgICQoJyNzdWJtaXQtYnRuJykucHJvcCgnZGlzYWJsZWQnLCB0cnVlKTtcbiAgICAgICAgICAgICAgICAkKCcjY29tbWVudC1hbGVydCcpLnNsaWRlRG93bigpO1xuICAgICAgICAgICAgICAgICQoJyNjb21tZW50LWFsZXJ0IHAnKS5odG1sKHJlc3BvbnNlLmRhdGEubWVzc2FnZSk7XG4gICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNjb21tZW50LWFsZXJ0Jykuc2xpZGVVcCgpO1xuICAgICAgICAgICAgICAgIH0sIDUwMDApO1xuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIC5jYXRjaCgoZXJyb3IpID0+IHtcbiAgICAgICAgICAgICAgICBpZiAoZXJyb3IucmVzcG9uc2Uuc3RhdHVzICE9PSA0MjIpIHtcbiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coZXJyb3IpO1xuICAgICAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIGNvbnN0IHZhbGlkYXRpb25FcnJvcnMgPSBlcnJvci5yZXNwb25zZS5kYXRhLmVycm9ycztcbiAgICAgICAgICAgICAgICBPYmplY3Qua2V5cyh2YWxpZGF0aW9uRXJyb3JzKS5tYXAoa2V5ID0+IHtcbiAgICAgICAgICAgICAgICAgICAgY29uc3QgbXNnID0gdmFsaWRhdGlvbkVycm9yc1trZXldWzBdO1xuICAgICAgICAgICAgICAgICAgICBjb25zdCBzZWxlY3RvciA9IFwiI1wiICsga2V5ICsgXCItZXJyb3JcIjtcbiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coc2VsZWN0b3IsIGtleSwgbXNnKTtcbiAgICAgICAgICAgICAgICAgICAgJChzZWxlY3Rvcikuc2xpZGVEb3duKCkudGV4dChtc2cpO1xuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICB9KTtcbiAgICB9KTtcbn0pO1xuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9jb21tZW50cy5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/comments.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/comments.js"]();
/******/ 	
/******/ })()
;