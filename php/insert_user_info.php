<?php 

//insert user_info

$connect = mysqli_connect("localhost","root","","vedic_astrology");

$data = json_decode(file_get_contents("php://input")); //newUser object

if($data != null && count((array)$data) > 0)
{
	if(isset($data->first_name) && isset($data->last_name) && isset($data->date_of_birth) && isset($data->time_of_birth->hour) && isset($data->time_of_birth->minute) && isset($data->time_of_birth->second) && isset($data->place_of_birth) && isset($data->approach_date) && isset($data->approach_time->hour) && isset($data->approach_time->minute) && isset($data->approach_time->second) && isset($data->approach_place) && isset($data->question_asked))
	{
		$user_first_name = mysqli_real_escape_string($connect, $data->first_name);  
   
    	$user_last_name = mysqli_real_escape_string($connect, $data->last_name); 

	    $user_dob = mysqli_real_escape_string($connect, $data->date_of_birth);

	    $h_of_birth = mysqli_real_escape_string($connect, $data->time_of_birth->hour);
	    $m_of_birth = mysqli_real_escape_string($connect, $data->time_of_birth->minute);
	    $s_of_birth = mysqli_real_escape_string($connect, $data->time_of_birth->second);

	    $place_of_birth = mysqli_real_escape_string($connect, $data->place_of_birth);

	    $approach_date = mysqli_real_escape_string($connect, $data->approach_date);

	    $h_of_approach = mysqli_real_escape_string($connect, $data->approach_time->hour);
	    $m_of_approach = mysqli_real_escape_string($connect, $data->approach_time->minute);
	    $s_of_approach = mysqli_real_escape_string($connect, $data->approach_time->second);

	    $approach_place = mysqli_real_escape_string($connect, $data->approach_place);
	    $question_asked = mysqli_real_escape_string($connect, $data->question_asked);
	}

    $query = "INSERT INTO new_user(user_first_name, user_last_name, user_dob, h_of_birth, m_of_birth, s_of_birth, place_of_birth, approach_date, h_of_approach, m_of_approach, s_of_approach, approach_place,question_asked) VALUES ('$user_first_name', '$user_last_name', '$user_dob', '$h_of_birth', '$m_of_birth', '$s_of_birth', '$place_of_birth', '$approach_date', '$h_of_approach', '$m_of_approach', '$s_of_approach','$approach_place', '$question_asked')";  

      if(mysqli_query($connect, $query))  
      {  
      	echo "Data Successfully Added!"; 
      }  
      else  
      {  
      	echo "Error Occured!";
      }  
}
 ?>