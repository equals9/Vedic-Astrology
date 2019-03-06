app.controller('PlanetInfo', ['$scope','$http','user_id_service', function($scope, $http, user_id_service){
	
	$scope.planetInfo = {};


	$scope.submit_planet_info = function(){

		$scope.d_o_a = new Date($scope.approachdate);
		$scope.planetInfo.approach_date = {};
		$scope.planetInfo.approach_date.day = $scope.d_o_a.getDate() < 10 ? "0" + $scope.d_o_a.getDate() : $scope.d_o_a.getDate();
		$scope.planetInfo.approach_date.month = ($scope.d_o_a.getMonth()+1) < 10 ? "0" + ($scope.d_o_a.getMonth()+1) : ($scope.d_o_a.getMonth()+1);
		$scope.planetInfo.approach_date.year = $scope.d_o_a.getFullYear();

		$scope.planetInfo.approach_time = {};
		$scope.planetInfo.approach_time.hour = $scope.hofapproach < 10 ? "0" + $scope.hofapproach : $scope.hofapproach;
		$scope.planetInfo.approach_time.minute = $scope.mofapproach < 10 ? "0" + $scope.mofapproach : $scope.mofapproach;
		$scope.planetInfo.approach_time.second = $scope.sofapproach < 10 ? "0" + $scope.sofapproach : $scope.sofapproach;

		$scope.planetInfo.approach_place = $scope.approachplace;

		$scope.planetInfo.question_asked = $scope.question;

		$scope.planetInfo.lagna_comment = $scope.lagnaComment;

		$scope.planetInfo.sun_comment = $scope.sunComment;

		$scope.planetInfo.moon_comment = $scope.moonComment;

		$scope.planetInfo.mars_comment = $scope.marsComment;

		$scope.planetInfo.mercury_comment = $scope.mercuryComment;

		$scope.planetInfo.jupiter_comment = $scope.jupiterComment;

		$scope.planetInfo.venus_comment = $scope.venusComment;

		$scope.planetInfo.saturn_comment = $scope.saturnComment;

		$scope.planetInfo.rahu_comment = $scope.rahuComment;

		$scope.planetInfo.ketu_comment = $scope.ketuComment;

		$scope.user_id = user_id_service.getProperty();

		$scope.local_id = $scope.planetInfo.approach_date.month + $scope.planetInfo.approach_date.day + $scope.planetInfo.approach_date.year + "_" + $scope.planetInfo.approach_time.hour + $scope.planetInfo.approach_time.minute + $scope.planetInfo.approach_time.second;
 
		firebase.database().ref('user_planet_data/' + $scope.user_id + '/' + $scope.local_id).set(
    	  JSON.parse(JSON.stringify($scope.planetInfo)),
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

		/*$http.post("php/insert_planet_info.php", $scope.planetInfo)
		.then(function successCallback(response){
			alert(response.data);
			//console.log(response);
		}, function errorCallback(response){
			//console.log(response);
		});*/

	};
}]);

