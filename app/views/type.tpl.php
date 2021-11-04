<?php
$type = $viewVars['type'];
?>

<div class="container-lg d-flex flex-wrap justify-content-center">
    <?php foreach ($type as $pokemon) : ?>
        <div class="card p-3 m-1" style="width: 18rem;">
            <div class="card-body"></a>
                <a href="<?= $router->generate('pokemon', ['id' => $pokemon->numero]); ?>"><img src="<?= $absoluteUrl ?>/img/<?= $pokemon->numero; ?>.png" class="card-img-top" alt="..."></a>
                <p class="card-text text-center ">#<?= $pokemon->numero; ?> <?= $pokemon->nom; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>