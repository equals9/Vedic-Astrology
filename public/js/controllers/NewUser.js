app.controller('NewUser', ['$scope','$http', 'user_id_service',function($scope, $http, user_id_service){


	$scope.newUser = {};

	$scope.insert_user_info = function(){


		$scope.newUser.first_name = $scope.firstname;
		
		$scope.newUser.last_name = $scope.lastname;

		$scope.newUser.email_id = $scope.email_id;

		$scope.newUser.ph_no = $scope.ph_no;

		$scope.d_o_b = new Date($scope.dateofbirth);
		$scope.newUser.date_of_birth = {};
		$scope.newUser.date_of_birth.day = $scope.d_o_b.getDate() < 10 ? "0" + $scope.d_o_b.getDate() : $scope.d_o_b.getDate();
		$scope.newUser.date_of_birth.month = ($scope.d_o_b.getMonth()+1) < 10 ? "0" + ($scope.d_o_b.getMonth()+1) : ($scope.d_o_b.getMonth()+1);
		$scope.newUser.date_of_birth.year = $scope.d_o_b.getFullYear();

		$scope.newUser.time_of_birth = {};
		$scope.newUser.time_of_birth.hour = $scope.hofbirth < 10 ? "0" + $scope.hofbirth : $scope.hofbirth;
		$scope.newUser.time_of_birth.minute = $scope.mofbirth < 10 ? "0" + $scope.mofbirth : $scope.mofbirth;
		$scope.newUser.time_of_birth.second = $scope.sofbirth < 10 ? "0" + $scope.sofbirth : $scope.sofbirth;

		$scope.newUser.place_of_birth = $scope.placeofbirth;

		$scope.userID = $scope.newUser.first_name + "_" +$scope.newUser.last_name + "_" + $scope.newUser.date_of_birth.month + $scope.newUser.date_of_birth.day + $scope.newUser.date_of_birth.year + "_" + $scope.newUser.time_of_birth.hour + $scope.newUser.time_of_birth.minute + $scope.newUser.time_of_birth.second;

		user_id_service.setProperty($scope.userID);

		firebase.database().ref('user_data/' + $scope.userID).set(
    	  JSON.parse(JSON.stringify($scope.newUser)),
    	  function(error) {
    		if (error) 
    		{
      			alert("Error Occured " + error);
    		} 
    		else 
    		{
      			alert("Data Added Successfully!");
    		}
  			});
		
		/*$http.post("php/insert_user_info.php", $scope.newUser)
		.then(function successCallback(response){
			alert(response.data);
			//console.log(response);
		}, function errorCallback(response){

		});
		firstname: $scope.newUser.first_name,
    		lastname: $scope.newUser.last_name,
    		email_id: $scope.newUser.email_id,
    		time_of_birth
		*/
	};
}]);