<?php

namespace Pokemon\Controllers;

use Pokemon\Models\Pokemon;

class MainController extends CoreController
{
    public function pokedex()
    {
        $sortType = isset($_GET['order']) ? $_GET['order'] : "";

        // if(isset($_GET['order'])){
        //     $sortType = $_GET['order'];

        // } else {
        //     $sortType = "";
        // }

        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll($sortType);

        $viewVars = [
            'pokemons' => $pokemons
        ];

        $this->show('pokedex', $viewVars);
    }
}
