<?php

namespace App\Controllers;

use App\Core\Application;
use Exception;

class PokemonController
{
    public function home()
    {
        return Application::$app->router->renderView('home');
    }

    public function searchPokemon()
    {
        try {
//            if (isset($_POST['search'])) {
//                var_dump($_POST['search']);
//            }
            var_dump($_POST);
        } catch (Exception $e) {
            echo json_encode(array(
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
            ));
        }
    }

    public function getPokemon()
    {
        header('Content-Type: application/json');
        $pokemon = file_get_contents("https://pokeapi.co/api/v2/pokemon/pikachu/");
        echo json_encode(array($pokemon));
    }
}