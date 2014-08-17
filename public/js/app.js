(function(angular){
  
'use strict';

angular.module('csApp', [
  'ngCookies',
  'ngResource',
  'ngSanitize',
  'ngRoute',
  'http-auth-interceptor',
  'ui.bootstrap',
  'csApp.controllers',
  'csApp.filters',
  'csApp.services',
  'csApp.directives'
])

.config(['$routeProvider', '$locationProvider', '$httpProvider', function($routeProvider, $locationProvider, $httpProvider) {

  $routeProvider.
    when('/', {
      templateUrl: '/partials/pagina1',
      controller: 'ctrlDashboard',
    }).
    when('/login', {
      templateUrl: '/partials/login',
      controller: 'ctrlDashboard',
    }).
    otherwise({
      redirectTo: '/'
    });

  $locationProvider.html5Mode(true);
  
}]);

})(angular);