'use strict';

/**
  * @ngdoc function
  * @name xApp.controller:MainCtrl
  * @description
  * # MainCtrl
  * Controller of the xApp
 */
angular.module('genApp').controller('MainCtrl', function($scope, $http, $window) {
  $scope.scrollDown = function() {
    $("body").animate({
      scrollTop: $("body").height()
    }, 1500);
    return false;
  };
  return $scope.email = function() {
    $scope.error = void 0;
    if (angular.isUndefined($scope.mail) || $scope.mail.search("@") === -1 || $scope.mail.search(".") === -1) {
      $scope.error = "Het email adres is niet geldig.";
      return false;
    }
    if ($scope.name === '' || angular.isUndefined($scope.name)) {
      $scope.error = "De naam is niet geldig.";
      return false;
    }
    if ($scope.message === '' || angular.isUndefined($scope.message)) {
      $scope.error = "Het bericht is niet geldig.";
      return false;
      return $http({
        url: './mail.php',
        data: {
          email: $scope.mail,
          name: $scope.name,
          message: $scope.message
        },
        method: "POST"
      }).success(function() {
        return $scope.error = "Het bericht is verstuurd, ik beantwoordt deze zo snel mogelijk.";
      });
    }
  };
});
