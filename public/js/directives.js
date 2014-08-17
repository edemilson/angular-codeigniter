(function(angular){
  
'use strict';

angular.module('csApp.directives', [])

.directive('appVersion', ['version', function(version) {
	return function(scope, elm, attrs) {
		elm.text(version);
	};
}]);

})(angular);