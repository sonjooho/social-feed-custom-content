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

$ar = json_decode($response,true);

echo $ar['access_token'];

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
