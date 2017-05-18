<?php

require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\HtttpFoundation\Response;

$api_key=getenv('OPEN_WEATHER_API');

$app = new Silex\Application();

$app->get('/clima', function() use($app, $api_key) {

//
      $client = new Client();
      $url = "http://api.openweathermap.org/data/2.5/weather?id=3529947&appid=$api_key&units=metric";
      $response = $client->get($url);
      $body = $response->getBody();

      return $body;
      



});

$app->run();