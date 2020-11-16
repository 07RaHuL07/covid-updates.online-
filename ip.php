<?php

$location = 'New York';

$queryString = http_build_query([
  'access_key' => '4a0966ea1e674d00ee75fc2d41acd651',
  'query' => $location,
]);

$ch = curl_init(sprintf('%s?%s', 'https://api.weatherstack.com/current', $queryString));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);
curl_close($ch);

$api_result = json_decode($json, true);

echo "Current temperature in $location is {$api_result['current']['temperature']}℃", PHP_EOL;


?>