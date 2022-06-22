<?php

use CureDAO\Client\Responses\BaseResponse;
use IlluminateAgnostic\Str\Support\Str;

require_once __DIR__ . '../vendor/autoload.php';
$client = new BaseResponse();

$response = $client->request('GET', 'https://app.quantimo.do/api/v3/variables?limit=100', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer demo',
    ],
]);

echo $response->getBody();
$path = $_SERVER['REQUEST_URI'];
if(strpos($path, '/variables') === 0){
    $params = $_GET;
    $varName = Str::after($path, "/variables/");

}
