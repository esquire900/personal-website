'use strict'

###*
 # @ngdoc function
 # @name xApp.controller:AboutCtrl
 # @description
 # # AboutCtrl
 # Controller of the xApp
###
angular.module('genApp')
  .controller 'AboutCtrl', ($scope) ->
    $scope.awesomeThings = [
      'HTML5 Boilerplate'
      'AngularJS'
      'Karma'
    ]
