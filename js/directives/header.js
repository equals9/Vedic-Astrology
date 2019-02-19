app.directive('headerTag', [function(){
	// Runs during compile
	return {
		// name: '',
		// priority: 1,
		// terminal: true,
		// scope: {}, // {} = isolate, true = child, false/undefined = no change
		// controller: function($scope, $element, $attrs, $transclude) {},
		// require: 'ngModel', // Array = multiple requires, ? = optional, ^ = check parent elements
		 restrict: 'E', // E = Element, A = Attribute, C = Class, M = Comment
		 template: '<!-- Header -->' +
					'<div class="jumbotron-fluid p-3 bg-light text-black" >' +
						'<div class="container-fluid text-center">' +
						'<h2 class="display-4 font-weight-normal">Vedic Astrology</h2>' +
						'</div>' +
					'</div>',
		// templateUrl: '' ,
		// replace: true,
		// transclude: true,
		// compile: function(tElement, tAttrs, function transclude(function(scope, cloneLinkingFn){ return function linking(scope, elm, attrs){}})),
		link: function($scope, iElm, iAttrs, controller) {
			
		}
	};
}]);