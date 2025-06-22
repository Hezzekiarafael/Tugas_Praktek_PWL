<?php
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://rajaongkir.komerce.id/api/v1/destination/domestic-destination?search=genuk&limit=1', [
    'headers' => [
        'accept' => 'application/json',
        'key' => 'NOV3cYuaf8d28757c8910fc5xKeCCsKI',
    ],
]);

echo $response->getBody();
