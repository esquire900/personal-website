'use strict'

###*
 # @ngdoc overview
 # @name xApp
 # @description
 # # xApp
 #
 # Main module of the application.
###
angular
  .module('genApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config ($routeProvider) ->
    $routeProvider
      .when '/',
        templateUrl: 'views/main.html'
        controller: 'MainCtrl'
      .otherwise
        redirectTo: '/'

