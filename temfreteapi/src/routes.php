<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

// Routes

require __DIR__ . '/routes/produtos.php';

require __DIR__ . '/routes/motoristas.php';

require __DIR__ . '/routes/fretes.php';

require __DIR__ . '/routes/email.php';

$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
    $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
    return $handler($req, $res);
});
