<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Verifica se o aplicativo está em modo de manutenção
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require_once $maintenance;
}

// Registra o carregador automático do Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Inicializa o Laravel e manipula a solicitação
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->handleRequest(Request::capture());

