<?php

// Autoload de Composer, pour charger automatiquement
require __DIR__ . '/../vendor/autoload.php';

// Instanciation d'AltoRouter
$router = new AltoRouter();
// On définit le chemin de base de notre dossier de travail sur localhost
$router->setBasePath($_SERVER['BASE_URI']);

// routes
$router->map(
    'GET',
    '/',
    [
        'controller' => 'Pokemon\Controllers\MainController',
        'method' => 'pokedex',
    ],
    'pokedex'
);

$router->map(
    'GET',
    '/pokemon/[i:id]',
    [
        'controller' => 'Pokemon\Controllers\PokemonController',
        'method' => 'pokemon',
    ],
    'pokemon'
);

$router->map(
    'GET',
    '/types',
    [
        'controller' => 'Pokemon\Controllers\PokemonController',
        'method' => 'types',
    ],
    'types'
);

$router->map(
    'GET',
    '/type/[i:id]',
    [
        'controller' => 'Pokemon\Controllers\PokemonController',
        'method' => 'oneType',
    ],
    'type'
);

$match = $router->match();

if ($match !== false) {
 
    $destination = $match['target'];

    $controllerName = $destination['controller'];
    $methodName = $destination['method'];
 
    $controller = new $controllerName($router);   
    $controller->$methodName($match['params']); 
} else {
    // On envoie une 404
    http_response_code(404);
    echo 'Page non trouvée.';
}