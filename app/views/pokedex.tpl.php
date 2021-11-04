<?php
$pokemonBase = $viewVars['pokemons'];
?>

<div class="container-lg d-flex flex-wrap justify-content-center">
    <?php foreach ($pokemonBase as $pokemon) : ?>
        <div class="card p-3 m-1" style="width: 18rem;">
            <div class="card-body"></a>
                <a href="<?= $router->generate('pokemon', ['id' => $pokemon->getNumero()]); ?>"><img src="<?= $absoluteUrl ?>/img/<?= $pokemon->getNumero(); ?>.png" class="card-img-top" alt="..."></a>
                <p class="card-text text-center ">#<?= $pokemon->getNumero(); ?> <?= $pokemon->getNom(); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>