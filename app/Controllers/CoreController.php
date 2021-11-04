<?php

namespace Pokemon\Controllers;

class CoreController
{
    // Une référence au router
    private $router;

    // Le constructeur va récupérer le $router en argument
    public function __construct($router)
    {
        $this->router = $router;
    }

    protected function show($viewName, $viewVars = [])
    {
        // Variable qui contient la base URL pour les liens absolus
        $absoluteUrl = $_SERVER['BASE_URI'];
        //dump($absoluteUrl);

        // variable qui contient les données du router, pour que l'on puisse s'en servir ailleurs
        $router = $this->router;

        // inclusion des différents templates pour l'affichage sur le site
        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }
}
