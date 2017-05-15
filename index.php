<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/clima', function() use($app) {

//

$arreglo = ["Juan_Carlos_Carranza_Moreno" => "715074876"];

    return $app -> json($arreglo);
});

$app->run();