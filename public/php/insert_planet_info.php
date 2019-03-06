<?php 

//insert planet_info

$connect = mysqli_connect("localhost","root","","vedic_astrology");

$data = json_decode(file_get_contents("php://input")); //newUser object

function get_house($houses){

	$values = array();
	foreach ($houses as $house) {
		if($house != "false")
		$values[] = $house;
	}
	return $values = implode(",", $values);
}

if($data != null && count((array)$data) > 0)
{

	//lagna insert
	if(isset($data->lagnaRL) && isset($data->lagnaNL) && isset($data->lagnaSL) && isset($data->lagnaMD) && isset($data->lagnaMD_house) && isset($data->lagnaAD) && isset($data->lagnaAD_house) && isset($data->lagnaPD) && isset($data->lagnaPD_house) && isset($data->lagna_comment))
	{
		$lagna_RL = mysqli_real_escape_string($connect, $data->lagnaRL);
		$lagna_NL = mysqli_real_escape_string($connect, $data->lagnaNL);
		$lagna_SL = mysqli_real_escape_string($connect, $data->lagnaSL);

		$lagna_MD = mysqli_real_escape_string($connect, $data->lagnaMD);
		$lagna_MD_house = get_house($data->lagnaMD_house);
		$lagna_MD_house = mysqli_real_escape_string($connect, $lagna_MD_house);

		$lagna_AD = mysqli_real_escape_string($connect, $data->lagnaAD);
		$lagna_AD_house = get_house($data->lagnaAD_house);
		$lagna_AD_house = mysqli_real_escape_string($connect, $lagna_AD_house);

		$lagna_PD = mysqli_real_escape_string($connect, $data->lagnaPD);
		$lagna_PD_house = get_house($data->lagnaPD_house);
		$lagna_PD_house = mysqli_real_escape_string($connect, $lagna_PD_house);

		$lagna_comment = mysqli_real_escape_string($connect, $data->lagna_comment);
	}

	$query = "INSERT INTO planet_info_lagna(lagna_RL, lagna_NL, lagna_SL, lagna_MD, lagna_MD_house , lagna_AD, lagna_AD_house, lagna_PD, lagna_PD_house, lagna_comment) VALUES ('$lagna_RL', '$lagna_NL', '$lagna_SL', '$lagna_MD', '$lagna_MD_house' ,'$lagna_AD', '$lagna_AD_house','$lagna_PD', '$lagna_PD_house', '$lagna_comment')"; 

	//sun insert
	if(isset($data->sunRL) && isset($data->sunNL) && isset($data->sunSL) && isset($data->sunMD) && isset($data->sunMD_house) && isset($data->sunAD) && isset($data->sunAD_house) && isset($data->sunPD) && isset($data->sunPD_house) && isset($data->sun_comment))
	{
		$sun_RL = mysqli_real_escape_string($connect, $data->sunRL);
		$sun_NL = mysqli_real_escape_string($connect, $data->sunNL);
		$sun_SL = mysqli_real_escape_string($connect, $data->sunSL);

		$sun_MD = mysqli_real_escape_string($connect, $data->sunMD);
		$sun_MD_house = get_house($data->sunMD_house);
		$sun_MD_house = mysqli_real_escape_string($connect, $sun_MD_house);

		$sun_AD = mysqli_real_escape_string($connect, $data->sunAD);
		$sun_AD_house = get_house($data->sunAD_house);
		$sun_AD_house = mysqli_real_escape_string($connect, $sun_AD_house);

		$sun_PD = mysqli_real_escape_string($connect, $data->sunPD);
		$sun_PD_house = get_house($data->sunPD_house);
		$sun_PD_house = mysqli_real_escape_string($connect, $sun_PD_house);

		$sun_comment = mysqli_real_escape_string($connect, $data->sun_comment);
	}

	$query_sun = "INSERT INTO planet_info_sun(sun_RL, sun_NL, sun_SL, sun_MD, sun_MD_house , sun_AD, sun_AD_house, sun_PD, sun_PD_house, sun_comment) VALUES ('$sun_RL', '$sun_NL', '$sun_SL', '$sun_MD', '$sun_MD_house' ,'$sun_AD', '$sun_AD_house','$sun_PD', '$sun_PD_house', '$sun_comment')"; 

	//moon insert
	if(isset($data->moonRL) && isset($data->moonNL) && isset($data->moonSL) && isset($data->moonMD) && isset($data->moonMD_house) && isset($data->moonAD) && isset($data->moonAD_house) && isset($data->moonPD) && isset($data->moonPD_house) && isset($data->moon_comment))
	{
		$moon_RL = mysqli_real_escape_string($connect, $data->moonRL);
		$moon_NL = mysqli_real_escape_string($connect, $data->moonNL);
		$moon_SL = mysqli_real_escape_string($connect, $data->moonSL);

		$moon_MD = mysqli_real_escape_string($connect, $data->moonMD);
		$moon_MD_house = get_house($data->moonMD_house);
		$moon_MD_house = mysqli_real_escape_string($connect, $moon_MD_house);

		$moon_AD = mysqli_real_escape_string($connect, $data->moonAD);
		$moon_AD_house = get_house($data->moonAD_house);
		$moon_AD_house = mysqli_real_escape_string($connect, $moon_AD_house);

		$moon_PD = mysqli_real_escape_string($connect, $data->moonPD);
		$moon_PD_house = get_house($data->moonPD_house);
		$moon_PD_house = mysqli_real_escape_string($connect, $moon_PD_house);

		$moon_comment = mysqli_real_escape_string($connect, $data->moon_comment);
	}

	$query_moon = "INSERT INTO planet_info_moon(moon_RL, moon_NL, moon_SL, moon_MD, moon_MD_house , moon_AD, moon_AD_house, moon_PD, moon_PD_house, moon_comment) VALUES ('$moon_RL', '$moon_NL', '$moon_SL', '$moon_MD', '$moon_MD_house' ,'$moon_AD', '$moon_AD_house','$moon_PD', '$moon_PD_house', '$moon_comment')"; 


	//mars insert
	if(isset($data->marsRL) && isset($data->marsNL) && isset($data->marsSL) && isset($data->marsMD) && isset($data->marsMD_house) && isset($data->marsAD) && isset($data->marsAD_house) && isset($data->marsPD) && isset($data->marsPD_house) && isset($data->mars_comment))
	{
		$mars_RL = mysqli_real_escape_string($connect, $data->marsRL);
		$mars_NL = mysqli_real_escape_string($connect, $data->marsNL);
		$mars_SL = mysqli_real_escape_string($connect, $data->marsSL);

		$mars_MD = mysqli_real_escape_string($connect, $data->marsMD);
		$mars_MD_house = get_house($data->marsMD_house);
		$mars_MD_house = mysqli_real_escape_string($connect, $mars_MD_house);

		$mars_AD = mysqli_real_escape_string($connect, $data->marsAD);
		$mars_AD_house = get_house($data->marsAD_house);
		$mars_AD_house = mysqli_real_escape_string($connect, $mars_AD_house);

		$mars_PD = mysqli_real_escape_string($connect, $data->marsPD);
		$mars_PD_house = get_house($data->marsPD_house);
		$mars_PD_house = mysqli_real_escape_string($connect, $mars_PD_house);

		$mars_comment = mysqli_real_escape_string($connect, $data->mars_comment);
	}

	$query_mars = "INSERT INTO planet_info_mars(mars_RL, mars_NL, mars_SL, mars_MD, mars_MD_house , mars_AD, mars_AD_house, mars_PD, mars_PD_house, mars_comment) VALUES ('$mars_RL', '$mars_NL', '$mars_SL', '$mars_MD', '$mars_MD_house' ,'$mars_AD', '$mars_AD_house','$mars_PD', '$mars_PD_house', '$mars_comment')"; 


	//mercury insert
	if(isset($data->mercuryRL) && isset($data->mercuryNL) && isset($data->mercurySL) && isset($data->mercuryMD) && isset($data->mercuryMD_house) && isset($data->mercuryAD) && isset($data->mercuryAD_house) && isset($data->mercuryPD) && isset($data->mercuryPD_house) && isset($data->mercury_comment))
	{
		$mercury_RL = mysqli_real_escape_string($connect, $data->mercuryRL);
		$mercury_NL = mysqli_real_escape_string($connect, $data->mercuryNL);
		$mercury_SL = mysqli_real_escape_string($connect, $data->mercurySL);

		$mercury_MD = mysqli_real_escape_string($connect, $data->mercuryMD);
		$mercury_MD_house = get_house($data->mercuryMD_house);
		$mercury_MD_house = mysqli_real_escape_string($connect, $mercury_MD_house);

		$mercury_AD = mysqli_real_escape_string($connect, $data->mercuryAD);
		$mercury_AD_house = get_house($data->mercuryAD_house);
		$mercury_AD_house = mysqli_real_escape_string($connect, $mercury_AD_house);

		$mercury_PD = mysqli_real_escape_string($connect, $data->mercuryPD);
		$mercury_PD_house = get_house($data->mercuryPD_house);
		$mercury_PD_house = mysqli_real_escape_string($connect, $mercury_PD_house);

		$mercury_comment = mysqli_real_escape_string($connect, $data->mercury_comment);
	}

	$query_mercury = "INSERT INTO planet_info_mercury(mercury_RL, mercury_NL, mercury_SL, mercury_MD, mercury_MD_house , mercury_AD, mercury_AD_house, mercury_PD, mercury_PD_house, mercury_comment) VALUES ('$mercury_RL', '$mercury_NL', '$mercury_SL', '$mercury_MD', '$mercury_MD_house' ,'$mercury_AD', '$mercury_AD_house','$mercury_PD', '$mercury_PD_house', '$mercury_comment')"; 

	//jupiter insert
	if(isset($data->jupiterRL) && isset($data->jupiterNL) && isset($data->jupiterSL) && isset($data->jupiterMD) && isset($data->jupiterMD_house) && isset($data->jupiterAD) && isset($data->jupiterAD_house) && isset($data->jupiterPD) && isset($data->jupiterPD_house) && isset($data->jupiter_comment))
	{
		$jupiter_RL = mysqli_real_escape_string($connect, $data->jupiterRL);
		$jupiter_NL = mysqli_real_escape_string($connect, $data->jupiterNL);
		$jupiter_SL = mysqli_real_escape_string($connect, $data->jupiterSL);

		$jupiter_MD = mysqli_real_escape_string($connect, $data->jupiterMD);
		$jupiter_MD_house = get_house($data->jupiterMD_house);
		$jupiter_MD_house = mysqli_real_escape_string($connect, $jupiter_MD_house);

		$jupiter_AD = mysqli_real_escape_string($connect, $data->jupiterAD);
		$jupiter_AD_house = get_house($data->jupiterAD_house);
		$jupiter_AD_house = mysqli_real_escape_string($connect, $jupiter_AD_house);

		$jupiter_PD = mysqli_real_escape_string($connect, $data->jupiterPD);
		$jupiter_PD_house = get_house($data->jupiterPD_house);
		$jupiter_PD_house = mysqli_real_escape_string($connect, $jupiter_PD_house);

		$jupiter_comment = mysqli_real_escape_string($connect, $data->jupiter_comment);
	}

	$query_jupiter = "INSERT INTO planet_info_jupiter(jupiter_RL, jupiter_NL, jupiter_SL, jupiter_MD, jupiter_MD_house , jupiter_AD, jupiter_AD_house, jupiter_PD, jupiter_PD_house, jupiter_comment) VALUES ('$jupiter_RL', '$jupiter_NL', '$jupiter_SL', '$jupiter_MD', '$jupiter_MD_house' ,'$jupiter_AD', '$jupiter_AD_house','$jupiter_PD', '$jupiter_PD_house', '$jupiter_comment')"; 


	//venus insert
	if(isset($data->venusRL) && isset($data->venusNL) && isset($data->venusSL) && isset($data->venusMD) && isset($data->venusMD_house) && isset($data->venusAD) && isset($data->venusAD_house) && isset($data->venusPD) && isset($data->venusPD_house) && isset($data->venus_comment))
	{
		$venus_RL = mysqli_real_escape_string($connect, $data->venusRL);
		$venus_NL = mysqli_real_escape_string($connect, $data->venusNL);
		$venus_SL = mysqli_real_escape_string($connect, $data->venusSL);

		$venus_MD = mysqli_real_escape_string($connect, $data->venusMD);
		$venus_MD_house = get_house($data->venusMD_house);
		$venus_MD_house = mysqli_real_escape_string($connect, $venus_MD_house);

		$venus_AD = mysqli_real_escape_string($connect, $data->venusAD);
		$venus_AD_house = get_house($data->venusAD_house);
		$venus_AD_house = mysqli_real_escape_string($connect, $venus_AD_house);

		$venus_PD = mysqli_real_escape_string($connect, $data->venusPD);
		$venus_PD_house = get_house($data->venusPD_house);
		$venus_PD_house = mysqli_real_escape_string($connect, $venus_PD_house);

		$venus_comment = mysqli_real_escape_string($connect, $data->venus_comment);
	}

	$query_venus = "INSERT INTO planet_info_venus(venus_RL, venus_NL, venus_SL, venus_MD, venus_MD_house , venus_AD, venus_AD_house, venus_PD, venus_PD_house, venus_comment) VALUES ('$venus_RL', '$venus_NL', '$venus_SL', '$venus_MD', '$venus_MD_house' ,'$venus_AD', '$venus_AD_house','$venus_PD', '$venus_PD_house', '$venus_comment')"; 


	//saturn insert
	if(isset($data->saturnRL) && isset($data->saturnNL) && isset($data->saturnSL) && isset($data->saturnMD) && isset($data->saturnMD_house) && isset($data->saturnAD) && isset($data->saturnAD_house) && isset($data->saturnPD) && isset($data->saturnPD_house) && isset($data->saturn_comment))
	{
		$saturn_RL = mysqli_real_escape_string($connect, $data->saturnRL);
		$saturn_NL = mysqli_real_escape_string($connect, $data->saturnNL);
		$saturn_SL = mysqli_real_escape_string($connect, $data->saturnSL);

		$saturn_MD = mysqli_real_escape_string($connect, $data->saturnMD);
		$saturn_MD_house = get_house($data->saturnMD_house);
		$saturn_MD_house = mysqli_real_escape_string($connect, $saturn_MD_house);

		$saturn_AD = mysqli_real_escape_string($connect, $data->saturnAD);
		$saturn_AD_house = get_house($data->saturnAD_house);
		$saturn_AD_house = mysqli_real_escape_string($connect, $saturn_AD_house);

		$saturn_PD = mysqli_real_escape_string($connect, $data->saturnPD);
		$saturn_PD_house = get_house($data->saturnPD_house);
		$saturn_PD_house = mysqli_real_escape_string($connect, $saturn_PD_house);

		$saturn_comment = mysqli_real_escape_string($connect, $data->saturn_comment);
	}

	$query_saturn = "INSERT INTO planet_info_saturn(saturn_RL, saturn_NL, saturn_SL, saturn_MD, saturn_MD_house , saturn_AD, saturn_AD_house, saturn_PD, saturn_PD_house, saturn_comment) VALUES ('$saturn_RL', '$saturn_NL', '$saturn_SL', '$saturn_MD', '$saturn_MD_house' ,'$saturn_AD', '$saturn_AD_house','$saturn_PD', '$saturn_PD_house', '$saturn_comment')"; 


	//rahu insert
	if(isset($data->rahuRL) && isset($data->rahuNL) && isset($data->rahuSL) && isset($data->rahuMD) && isset($data->rahuMD_house) && isset($data->rahuAD) && isset($data->rahuAD_house) && isset($data->rahuPD) && isset($data->rahuPD_house) && isset($data->rahu_comment))
	{
		$rahu_RL = mysqli_real_escape_string($connect, $data->rahuRL);
		$rahu_NL = mysqli_real_escape_string($connect, $data->rahuNL);
		$rahu_SL = mysqli_real_escape_string($connect, $data->rahuSL);

		$rahu_MD = mysqli_real_escape_string($connect, $data->rahuMD);
		$rahu_MD_house = get_house($data->rahuMD_house);
		$rahu_MD_house = mysqli_real_escape_string($connect, $rahu_MD_house);

		$rahu_AD = mysqli_real_escape_string($connect, $data->rahuAD);
		$rahu_AD_house = get_house($data->rahuAD_house);
		$rahu_AD_house = mysqli_real_escape_string($connect, $rahu_AD_house);

		$rahu_PD = mysqli_real_escape_string($connect, $data->rahuPD);
		$rahu_PD_house = get_house($data->rahuPD_house);
		$rahu_PD_house = mysqli_real_escape_string($connect, $rahu_PD_house);

		$rahu_comment = mysqli_real_escape_string($connect, $data->rahu_comment);
	}

	$query_rahu = "INSERT INTO planet_info_rahu(rahu_RL, rahu_NL, rahu_SL, rahu_MD, rahu_MD_house , rahu_AD, rahu_AD_house, rahu_PD, rahu_PD_house, rahu_comment) VALUES ('$rahu_RL', '$rahu_NL', '$rahu_SL', '$rahu_MD', '$rahu_MD_house' ,'$rahu_AD', '$rahu_AD_house','$rahu_PD', '$rahu_PD_house', '$rahu_comment')"; 

	//ketu insert
	if(isset($data->ketuRL) && isset($data->ketuNL) && isset($data->ketuSL) && isset($data->ketuMD) && isset($data->ketuMD_house) && isset($data->ketuAD) && isset($data->ketuAD_house) && isset($data->ketuPD) && isset($data->ketuPD_house) && isset($data->ketu_comment))
	{
		$ketu_RL = mysqli_real_escape_string($connect, $data->ketuRL);
		$ketu_NL = mysqli_real_escape_string($connect, $data->ketuNL);
		$ketu_SL = mysqli_real_escape_string($connect, $data->ketuSL);

		$ketu_MD = mysqli_real_escape_string($connect, $data->ketuMD);
		$ketu_MD_house = get_house($data->ketuMD_house);
		$ketu_MD_house = mysqli_real_escape_string($connect, $ketu_MD_house);

		$ketu_AD = mysqli_real_escape_string($connect, $data->ketuAD);
		$ketu_AD_house = get_house($data->ketuAD_house);
		$ketu_AD_house = mysqli_real_escape_string($connect, $ketu_AD_house);

		$ketu_PD = mysqli_real_escape_string($connect, $data->ketuPD);
		$ketu_PD_house = get_house($data->ketuPD_house);
		$ketu_PD_house = mysqli_real_escape_string($connect, $ketu_PD_house);

		$ketu_comment = mysqli_real_escape_string($connect, $data->ketu_comment);
	}

	$query_ketu = "INSERT INTO planet_info_ketu(ketu_RL, ketu_NL, ketu_SL, ketu_MD, ketu_MD_house , ketu_AD, ketu_AD_house, ketu_PD, ketu_PD_house, ketu_comment) VALUES ('$ketu_RL', '$ketu_NL', '$ketu_SL', '$ketu_MD', '$ketu_MD_house' ,'$ketu_AD', '$ketu_AD_house','$ketu_PD', '$ketu_PD_house', '$ketu_comment')"; 

      if(mysqli_query($connect, $query) && mysqli_query($connect, $query_sun) && mysqli_query($connect, $query_moon) && mysqli_query($connect, $query_mars) && mysqli_query($connect, $query_mercury) && mysqli_query($connect, $query_jupiter) && mysqli_query($connect, $query_venus) && mysqli_query($connect, $query_saturn) && mysqli_query($connect, $query_rahu) && mysqli_query($connect, $query_ketu))
      {  
      	echo "Data Successfully Added!"; 
      }  
      else  
      {  
      	echo "Error Occured!";
      }  
}
 ?>
