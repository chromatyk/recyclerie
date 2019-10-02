<!doctype html>
<html lang="fr">
<head>
  <!--        <base href="https://www.villeinfo.fr" />-->
  <!--        <meta name="generator" content="Jekyll v3.8.5" />-->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Site de la recyclerie du pays Nayonnais" />
  <meta name="publisher" content="Kaiartsu">
  <meta name="author" content="Kaiartsu" />
  <meta name="reply-to" content="contact@kaiartsu.fr">
  <title>Boutique | Recyclerie du Pays Noyonnais | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="shortcut icon" type="assets/images/logo/fav.png" href="assets/images/favicon.png"/>
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/boutique.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<?php
include_once 'models/dataBase.php';
include_once 'models/shopModel.php';
include_once 'controlers/shopControler.php';
?>
<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0"></script>
  <div class="container-fluid">
    <?php
    include 'vues/header.php';
    ?>
    <div class="container-fluid">
      <div class="row triObjects">
        <div class=" offset-5 col-2">
          <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
              <select class="custom-select custom-select-sm">
                <option selected>Trier par catégorie</option>
                <option value="1">Retro</option>
                <option value="2">Moderne</option>
                <option value="3">Jouets</option>
              </select>
            </div>
          </form>
        </div>
      </div>
      <div class="">
        <div class="row listObjects">
          <?php
          foreach ($allProducts as $allProducts) {
            ?>
            <div class="card col-12 tilt tilt-logo" style="width: 18rem;" data-tilt data-tilt-glare="true" data-tilt-scale="1.1">
              <img class="card-img-top" src="assets/images/<?= $allProducts->mainPicture ?>" alt="Card image cap">
              <div class="card-body">
                <p class="card-title"><?= $allProducts->name ?></p>
              </div>
              <?php
              if ($allProducts->idCategorie == 1) {
              ?>
              <img src="assets/images/vintage.png" class="macaronCat" alt="...">
              <?php
            }elseif ($allProducts->idCategorie == 2) {
              ?>
            <img src="assets/images/moderne.png" class="macaronCat" alt="...">
            <?php
            }
              ?>

            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
    <?php
    include 'vues/footer.php';
    ?>
    <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript" /></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tilt.js"></script>
  </body>
  </html>
