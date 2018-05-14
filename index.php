<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.socialstudio.radian6.com/oauth/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "grant_type=password&client_id=mcxxe11808eec6214492ba92dc49d8824c3d&client_secret=5ed9314d51f340888ffd36f4364ffbae&username=r6-json&password=Thswnghdudwn%24017",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Content-Type: application/x-www-form-urlencoded",
    "Postman-Token: 0d67cb2c-66ce-4198-8b4a-aaf0c77d73a1"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$auth = json_decode($response,true);

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.socialstudio.radian6.com/v3/topics?status=4&orderBy=title",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Postman-Token: 6b9c8e8c-91d6-4aca-a0a9-4074d99714b3",
    "access_token: {$auth['access_token']}"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$tp = json_decode($response,true);

echo $tp['data'][0]['title'];
//echo "\n"
//echo $tp['data'][1]['title'];
//echo "\n"
//echo $tp['data'][2]['title'];
//echo "\n"
//echo count($tp['data'])

//for($i = 0, $l = count($tp['data']); $i < $l; ++$i) {
// echo $tp['data'][i]['title'];
//}

?>
