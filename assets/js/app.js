// This is our app with Angular route injected
var App = angular.module('App', ['ngRoute']);

// These are routes of our application
App.config(['$routeProvider', function($routeProvider){

  $routeProvider
    .when('/', {
      templateUrl: 'app/views/home.html',
      controller: 'HomeController'
    })
    .otherwise('/');

}]);
