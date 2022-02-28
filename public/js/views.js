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

/***/ "./resources/js/views.js":
/*!*******************************!*\
  !*** ./resources/js/views.js ***!
  \*******************************/
/***/ (() => {

eval("$(document).ready(function () {\n  setTimeout(increaseViews, 5000);\n});\n\nfunction increaseViews() {\n  var id = $(\".main #articleId\").text();\n  axios.post('/api/increaseViews/' + id, {}).then(function (response) {\n    $(\".main .article-counters .views .number\").text(response.data.count);\n  }, function (error) {\n    console.log(error);\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvdmlld3MuanM/ZDdkOSJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInNldFRpbWVvdXQiLCJpbmNyZWFzZVZpZXdzIiwiaWQiLCJ0ZXh0IiwiYXhpb3MiLCJwb3N0IiwidGhlbiIsInJlc3BvbnNlIiwiZGF0YSIsImNvdW50IiwiZXJyb3IiLCJjb25zb2xlIiwibG9nIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFZO0FBQzFCQyxFQUFBQSxVQUFVLENBQUNDLGFBQUQsRUFBZ0IsSUFBaEIsQ0FBVjtBQUNILENBRkQ7O0FBSUEsU0FBU0EsYUFBVCxHQUF5QjtBQUNyQixNQUFJQyxFQUFFLEdBQUdMLENBQUMsQ0FBQyxrQkFBRCxDQUFELENBQXNCTSxJQUF0QixFQUFUO0FBQ0FDLEVBQUFBLEtBQUssQ0FBQ0MsSUFBTixDQUFXLHdCQUF3QkgsRUFBbkMsRUFBdUMsRUFBdkMsRUFDS0ksSUFETCxDQUNVLFVBQUNDLFFBQUQsRUFBYztBQUNoQlYsSUFBQUEsQ0FBQyxDQUFDLHdDQUFELENBQUQsQ0FBNENNLElBQTVDLENBQWlESSxRQUFRLENBQUNDLElBQVQsQ0FBY0MsS0FBL0Q7QUFDSCxHQUhMLEVBR08sVUFBQ0MsS0FBRCxFQUFXO0FBQ1ZDLElBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZRixLQUFaO0FBQ0gsR0FMTDtBQU1IIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuICAgIHNldFRpbWVvdXQoaW5jcmVhc2VWaWV3cywgNTAwMCk7XG59KTtcblxuZnVuY3Rpb24gaW5jcmVhc2VWaWV3cygpIHtcbiAgICBsZXQgaWQgPSAkKFwiLm1haW4gI2FydGljbGVJZFwiKS50ZXh0KCk7XG4gICAgYXhpb3MucG9zdCgnL2FwaS9pbmNyZWFzZVZpZXdzLycgKyBpZCwge30pXG4gICAgICAgIC50aGVuKChyZXNwb25zZSkgPT4ge1xuICAgICAgICAgICAgJChcIi5tYWluIC5hcnRpY2xlLWNvdW50ZXJzIC52aWV3cyAubnVtYmVyXCIpLnRleHQocmVzcG9uc2UuZGF0YS5jb3VudCk7XG4gICAgICAgIH0sIChlcnJvcikgPT4ge1xuICAgICAgICAgICAgY29uc29sZS5sb2coZXJyb3IpO1xuICAgICAgICB9KTtcbn1cbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvdmlld3MuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/views.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/views.js"]();
/******/ 	
/******/ })()
;