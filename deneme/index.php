
<?php

$telefon= $_POST['telefon'];
$mesaj= $_POST['metin'];
echo $telefon;
echo $mesaj;


$curl = curl_init();

$params = [
  'api_id' => 'c2173e85c8d39bb14d507187',
  'api_key' => '9f6bd5dc8672a803c70baad1',
  'sender' => 'DR.YSOGUR',
  'message_type' => 'normal',
  'message' => $mesaj,
  'phones' => [
    $telefon
    
  ]
];

$curl_options = [
  CURLOPT_URL => 'https://api.vatansms.net/api/v1/1toN',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_POSTFIELDS => json_encode($params),
  CURLOPT_HTTPHEADER => [
    'Content-Type: application/json'
  ]
];

curl_setopt_array($curl, $curl_options);

$response = curl_exec($curl);

curl_close($curl);

echo $response;

?>       




	