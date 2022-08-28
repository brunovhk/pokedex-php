<?php
require_once __DIR__ . '/../vendor/autoload.php';


use App\Controllers\PokemonController;
use App\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [PokemonController::class, 'home']);

$app->router->post('/', [PokemonController::class, 'searchPokemon']);

$app->router->get('/API/getPokemon', [PokemonController::class, 'getPokemon']);

$app->run();