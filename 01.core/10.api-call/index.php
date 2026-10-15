<?php
$ch = curl_init("https://api.github.com/users/ahadsts9901");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Need to set User-Agent for GitHub API
curl_setopt($ch, CURLOPT_USERAgent, 'Mozilla/5.0'); 
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true); // true converts JSON to associative array
echo $data['name'] ?? 'Not found';
?>