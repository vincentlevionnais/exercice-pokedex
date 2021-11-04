<?php
$pokemon = $viewVars['pokemon'];
?>
<section class="my-5">
    <div class="container-lg">
        <h1 class="text-center text-white">Détails de <?= $pokemon[0]->getNom() ?></h1>
        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-4">
                <img class="card-img-top" src="<?= $absoluteUrl ?>/img/<?= $pokemon[0]->getNumero() ?>.png" alt="Card image cap">
            </div>
            <div class="col-7">
                <div class="card px-4 py-5 text-white" id="pokemon_card">
                    <h3 class="">#<?= $pokemon[0]->getNumero() ?> <?= $pokemon[0]->getNom() ?></h3>
                    <div class="my-3">
                        <?php if (!empty($pokemon[1])) : ?>
                            <?php for ($i = 0; $i <= 1; $i++) : ?>
                                <a href="<?= $router->generate('type', ['id' => $pokemon[$i]->type_id]); ?>"><button class="btn" style="background-color: #<?= $pokemon[$i]->color ?>"><?= $pokemon[$i]->name ?></button></a>
                            <?php endfor; ?>
                        <?php else : ?>
                            <a href="<?= $router->generate('type', ['id' => $pokemon[0]->type_id]); ?>"><button class="btn" style="background-color: #<?= $pokemon[0]->color ?>"><?= $pokemon[0]->name ?></button></a>
                        <?php endif; ?>
                    </div>
                    <h4 class="my-3">Statistiques</h5>
                        <table>
                            <tbody>
                                <tr class="m-auto">
                                    <th scope="row">PV</th>
                                    <td><?= $pokemon[0]->getPv() ?></td>
                                    <td>
                                        <progress class="progress-bar" max="255" value="<?= $pokemon[0]->getPv() ?>"></progress>
                                    </td>
                                </tr>
                                <tr class="m-auto">
                                    <th scope="row">Attaque</th>
                                    <td><?= $pokemon[0]->getAttaque() ?></td>
                                    <td>
                                        <progress class="progress-bar" max="255" value="<?= $pokemon[0]->getAttaque() ?>"></progress>
                                    </td>
                                </tr>
                                <tr class="m-auto">
                                    <th scope="row">Défense</th>
                                    <td><?= $pokemon[0]->getDefense() ?></td>
                                    <td>
                                        <progress class="progress-bar" max="255" value="<?= $pokemon[0]->getDefense() ?>"></progress>
                                    </td>
                                </tr>
                                <tr class="m-auto">
                                    <th scope="row">Attaque Spé</th>
                                    <td><?= $pokemon[0]->getAttaque_spe() ?></td>
                                    <td>
                                        <progress class="progress-bar" max="255" value="<?= $pokemon[0]->getAttaque_spe() ?>"></progress>
                                    </td>
                                </tr>
                                <tr class="m-auto">
                                    <th scope="row">Defense Spé</th>
                                    <td><?= $pokemon[0]->getDefense_spe() ?></td>
                                    <td>
                                        <progress class="progress-bar" max="255" value="<?= $pokemon[0]->getDefense_spe() ?>"></progress>
                                    </td>
                                </tr>
                                <tr class="m-auto">
                                    <th scope="row">Vitesse</th>
                                    <td><?= $pokemon[0]->getVitesse() ?></td>
                                    <td>
                                        <progress class="progress-bar" max="255" value="<?= $pokemon[0]->getVitesse() ?>"></progress>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</section>