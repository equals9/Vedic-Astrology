var app = angular.module('Vedic_Astrology', ['ngRoute']);

app.config(function($routeProvider) {
	$routeProvider
	.when('/',{
		templateUrl:"views/home.html"
	})

	.when('/new user',{
		templateUrl:"views/new user.html",
		//controller: "NewUser"
	})

	.when('/complete new user',{
		templateUrl:"views/complete new user.html",
		//controller: "NewUser"
	})

	.when('/view_user',{
		templateUrl:"views/view_user.html",
		//controller: "NewUser"
	})

	.otherwise({
		templateUrl: "views/home.html"
	});
});