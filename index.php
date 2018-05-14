<?php

$request = new HttpRequest();
$request->setUrl('https://api.socialstudio.radian6.com/oauth/token');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'Content-Type' => 'application/x-www-form-urlencoded',
  'Postman-Token' => '99bb970a-3936-49f3-ab98-b226c61787c1',
  'Cache-Control' => 'no-cache'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'grant_type' => 'password',
  'client_id' => 'mcxxe11808eec6214492ba92dc49d8824c3d',
  'client_secret' => '5ed9314d51f340888ffd36f4364ffbae',
  'username' => 'r6-json',
  'password' => 'Thswnghdudwn$017'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
?>
