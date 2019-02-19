app.controller('NewUser', ['$scope','$http', function($scope, $http){

	$scope.insert_user_info = function(){

		$scope.newUser = {};

		$scope.newUser.first_name = $scope.firstname;
		
		$scope.newUser.last_name = $scope.lastname;

		$scope.newUser.date_of_birth = new Date($scope.dateofbirth);


		$scope.newUser.time_of_birth = {};
		$scope.newUser.time_of_birth.hour = $scope.hofbirth;
		$scope.newUser.time_of_birth.minute = $scope.mofbirth;
		$scope.newUser.time_of_birth.second = $scope.sofbirth;

		$scope.newUser.place_of_birth = $scope.placeofbirth;

		$scope.newUser.approach_date = new Date($scope.approachdate);

		$scope.newUser.approach_time = {};
		$scope.newUser.approach_time.hour = $scope.hofapproach;
		$scope.newUser.approach_time.minute = $scope.mofapproach;
		$scope.newUser.approach_time.second = $scope.sofapproach;

		$scope.newUser.approach_place = $scope.approachplace;

		$scope.newUser.question_asked = $scope.question;

		$http.post("php/insert_user_info.php", $scope.newUser)
		.then(function successCallback(response){
			alert(response);
		}, function errorCallback(response){

		});
	};
}]);