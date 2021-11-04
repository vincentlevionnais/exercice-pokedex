<?php
$types = $viewVars['types'];
?>

<div class="container d-flex flex-wrap justify-content-center">
    <?php foreach ($types as $type) : ?>
        <button type="button" class="btn" style="background-color: #<?= $type->getColor(); ?>">
            <a href="<?= $router->generate('type', ['id' => $type->getId()]); ?>"><?= $type->getName(); ?></a>
        </button>
    <?php endforeach; ?>
</div>