<?php

namespace Pokemon\Controllers;

use Pokemon\Models\Types;
use Pokemon\Models\Pokemon;

class PokemonController extends CoreController
{
    public function pokemon($params)
    {
        $pokemonNumero = $params['id'];

        $pokemonModel = new Pokemon();
        $pokemon = $pokemonModel->findOnePokemon($pokemonNumero) ;

        $viewVars = [
            'pokemon' => $pokemon,
        ];

        $this->show('pokemon', $viewVars);
    }

    public function types()
    {
        $typesModel = new Types();
        $types = $typesModel->findAllTypes();

        $viewVars = [
            'types' => $types
        ];

        $this->show('types', $viewVars);
    }

    public function oneType($params)
    {

        $typeId = $params['id'];
          
        $typeModel = new Types();
        $type = $typeModel->findOneType($typeId);

        $viewVars = [
            'type' => $type
        ];

        $this->show('type', $viewVars);
    }
}