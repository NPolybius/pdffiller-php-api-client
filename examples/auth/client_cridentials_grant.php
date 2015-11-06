<?php

require_once __DIR__.'/../bootstrap/init.php';

/** @var \aslikeyou\OAuth2\Client\Provider\Pdffiller $provider */
$provider = Examples\ExampleFabric::getProvider(Examples\ExampleFabric::CLIENT_CRIDENTIALS_GRANT, [
    'clientId'       => getenv('CLIENT_ID'),
    'clientSecret'   => getenv('CLIENT_SECRET'),
    'urlAccessToken' => getenv('URL_ACCESS_TOKEN'),
    'urlApiDomain'   => getenv('URL_API_DOMAIN')
]);

dd($provider->queryApiCall('test'));