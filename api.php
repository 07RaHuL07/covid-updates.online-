<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.covid19api.com/summary",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: covid-19-tracking.p.rapidapi.com",
		"x-rapidapi-key: e1ebdb3057msh56cb6b3d33fbfdep18c918jsn2963300d71b5"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	
	
	
	$response= json_decode($response, true);
	/*echo "<pre>";
	print_r($response);*/
	
$NewConfirmed = array_column($response, 'NewConfirmed');
$TotalConfirmed =array_column($response,'TotalConfirmed');
$NewDeaths =array_column($response,'NewDeaths');
$TotalDeaths =array_column($response,'TotalDeaths');
$NewRecovered =array_column($response,'NewRecovered');
$TotalRecovered =array_column($response,'TotalRecovered');
	
	
	/*print_r($last_names);*/
		
	//echo $NewConfirmed[0];
	
	
	

	
	//echo $TotalConfirmed[0];
	
	
	}
	
	
	
	
		
	
	

?>