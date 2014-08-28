'use strict'

###*
 # @ngdoc function
 # @name xApp.controller:MainCtrl
 # @description
 # # MainCtrl
 # Controller of the xApp
###
angular.module('genApp')
	.controller 'MainCtrl', ($scope, $http, $window) ->

		$scope.scrollDown = () ->
			$("body").animate({scrollTop: $("body").height()}, 1500);
			return false

		$scope.emailFunc = () ->
			$scope.error = undefined
			if angular.isUndefined($scope.mail) or $scope.mail.search("@") is -1 or $scope.mail.search(".") is -1
				$scope.error = "Het email adres is niet geldig."
				return false
			if $scope.name is '' or angular.isUndefined($scope.name)
				$scope.error = "De naam is niet geldig."
				return false
			if $scope.message is '' or angular.isUndefined($scope.message)
				$scope.error = "Het bericht is niet geldig."
				return false
			# email to backend
			$http({
				url: './mail.php', 
				data: {
					email: $scope.mail
					name: $scope.name
					message: $scope.message
				}
				, method: "POST"}).success () ->
				$scope.error = "Het bericht is verstuurd, ik beantwoordt deze zo snel mogelijk."
				$scope.$apply() if !$scope.$$phase
