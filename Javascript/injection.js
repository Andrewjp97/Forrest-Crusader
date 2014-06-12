// JavaScript Document
var app = angular.module('injection',[]);



app.directive('customFooter', function(){
	return {
		restrict: 'E',
		replace: 'true',
		templateUrl: '../Templates/custom-footer.html'
	};
});