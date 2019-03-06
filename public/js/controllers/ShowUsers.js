app.controller('ShowUsers', ['$scope','$http','user_id_service', function($scope, $http, user_id_service){
	
	$scope.keys = "";

	$scope.planet_data = "";

	firebase.database().ref('user_data/').on('value', userData, user_err);

	firebase.database().ref('user_planet_data/').on('value', planetData, planet_err);


	function userData(data){
		$scope.user_data = data.val();

		$scope.keys = Object.keys($scope.user_data);
		//console.log($scope.keys);

	}

	function user_err(err){
		console.log(err);
	}

	function planetData(data){
		$scope.planet_data = data.val();
		//console.log($scope.planet_data);

	}

	function planet_err(err){
		console.log(err);
	}

	$scope.current_user = function() {
		$scope.planet_key = Object.keys($scope.planet_data[$scope.selected_user]);
		//console.log($scope.planet_key);
	};

	$scope.addNew_planet_info = function(){
		user_id_service.setProperty($scope.selected_user);
	};

	/*$scope.showUsers_names = function() {
		$http.get("php/show_users.php")
	.then(function successCallback(response){

		$scope.user_data = response.data;
		console.log(response);
		alert("Data received");
	}, function errorCallback(response){
		alert("Error occured");
		});
	};*/
}]);