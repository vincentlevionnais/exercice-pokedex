<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="<?= $absoluteUrl ?>/css/style.css" rel="stylesheet">
  <title>Document</title>
</head>

<body class="body">
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-lg">
        <a class="navbar-brand" href="<?= $absoluteUrl ?>">Pokedex</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= $absoluteUrl ?>/">Liste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $absoluteUrl ?>/types">Types</a>
            </li>
            <?php if ($_SERVER['REQUEST_URI'] == $absoluteUrl . "/" || (str_contains($_SERVER['REQUEST_URI'], "?order"))) : ?>
              <li class="nav-item">
                <select select class="form-select" aria-label="Default select example" onchange="document.location.href=this.value">
                  <option value="">Défaut</option>
                  <option value="<?= $absoluteUrl ?>">Annuler le tri</option>
                  <option value="?order=alphabet">Alphabétique</option>
                  <option value="?order=pv">PV</option>
                  <option value="?order=attaque">Attaque</option>
                  <option value="?order=defense">Défense</option>
                  <option value="?order=atkspe">Attaque Spé</option>
                  <option value="?order=defspe">Defense Spé</option>
                  <option value="?order=vitesse">Vitesse</option>
                </select>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>