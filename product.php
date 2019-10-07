<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Site de la recyclerie du Pays Noyonnais" />
  <meta name="publisher" content="Kaiartsu">
  <meta name="author" content="Kaiartsu" />
  <meta name="reply-to" content="contact@kaiartsu.fr">
  <title>Nom du produit | Recyclerie du Pays Noyonnais | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="shortcut icon" type="assets/images/favicon.png" href="assets/images/favicon.png"/>
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/product.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css" type="text/css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<?php
    include_once 'models/dataBase.php';
    include_once 'models/shopModel.php';
    include_once 'controlers/productPageControler.php';

?>
<body>
  <div class="container-fluid">
    <?php
    include 'vues/header.php';
    ?>
    <div id="main">
      <!-- Fil d'ariane -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item"><a href="#">Boutique</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nom du Produit</li>
        </ol>
      </nav>
      <!-- Fin du fil d'ariane -->
      <!-- Contenu Produit -->
      <div class="row" id="productContainer">
        <!-- Image & carousel du Produit-->
        <div class="offset-lg-1 col-lg-3 imgProduct">
          <div class="image-gallery">
            <input type="radio" name="image_radio_group" id="image1" checked />
            <input type="radio" name="image_radio_group" id="image2" />
            <input type="radio" name="image_radio_group" id="image3" />
            <input type="radio" name="image_radio_group" id="image4" />
          <?php if (!empty($allPictures)){?>

             <?php } ?>
            <div class="image-container">
              <div class="image-1" onclick="openModal();currentSlide(1)" style="background-image:url('assets/images/<?= $productInfos->mainPicture ?>'); background-size:contain; background-repeat:no-repeat;"></div>
               <?php foreach ($allPictures as $allPictures){ ?>
                <div class="image-<?= $allPictures->id + 1 ?>" onclick="openModal();currentSlide(2)" style="background-image:url('assets/media/<?= $allPictures->name ?>')"></div>
              <?php }?>
            </div>
            <div class="thumbnails">
              <label for="image1" style="background-image:url('assets/images/<?= $productInfos->mainPicture ?>'); background-size:contain; background-repeat:no-repeat;"></label>
              <?php foreach ($allPicturesMini as $allPicturesMini){ ?>
              <label for="image<?= $allPicturesMini->id + 1 ?>" style="background-image:url('assets/media/<?= $allPicturesMini->name ?>'); background-size:contain; background-repeat:no-repeat;"></label>
              <?php } ?>
            </div>
          </div>
        </div>

        <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">
              <div class="mySlides">
                <img src="assets/images/<?= $productInfos->mainPicture ?>" style="width:100%">
              </div>
              <?php foreach ($allPicturesZoom as $allPicturesZoom){ ?>
              <div class="mySlides">
                <img src="assets/media/<?= $allPicturesZoom->name ?>" style="width:100%">
              </div>
              <?php } ?>
            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

          </div>
        </div>
        <!-- Fin image & carousel du Produit-->
        <!-- Texte, description, nom du Produit-->
        <div class="col-lg-6 offset-lg-1 textProduct">
          <h1><?= $productInfos->name ?></h1>
          <!-- Barre état -->
          <div class="row">
            <?php if (is_null($productInfos->idWorker) ){ ?>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
              <div class="media">
                <div class="media-body">
                  <h5 class="mt-0">Ce produit n'a pas été modifié</h5>
                </div>
              </div>
            </div>

            <?php }else{
              ?>
              <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <div class="media">
                  <img src="assets/images/placeholder.jpg" class="mr-3" alt="...">
                  <div class="media-body">
                    <h5 class="mt-0"><?= $productInfos->firstName ?> <?= $productInfos->lastName?></h5>
                    A refait ce produit.
                  </div>
                </div>
              </div>
              <?php
            } ?>
            <div class="col-lg-2 offset-lg-1 col-md-2 offset-md-1 col-sm-2 offset-sm-1 col-5 offset-1 macaronProduct">
              <?php if ($productInfos->idCategorie == 1 ){ ?>
                <img src="assets/images/vintage.png" />
              <?php }elseif($productInfos->idCategorie == 2){ ?>
                <img src="assets/images/moderne.png" />
              <?php } ?>
            </div>
          </div>
          <!-- Fin barre état -->
          <div class="row">
            <div class="col-lg-8">
              <p class="description"><?= $productInfos->description ?></p>
            </div>
          </div>
        </div>
        <!-- Fin texte, description, nom du Produit-->
      </div>
      <div class="row">
        <div class="col-lg-12" id="suggestion">
          <div class="row">
            <div class="offset-lg-1 col-lg-8">
              <h3>La recyclerie vous propose aussi..</h3>
            </div>
          </div>
          <div class="row">
            <div class="card" style="width: 18rem;">
              <a href="product.php">
                <img src="assets/images/objet.jpeg" class="card-img-top" alt="imag objet">
                <div class="card-body">
                  <div class="vintage">
                  </div>
                  <div id="row" class="row">
                    <div class="col-5">
                      <img id="macaron" src="assets/images/Macaron_Vintage.png" alt="">
                    </div>
                    <div class="col-7">
                      <h3 class="card-title">Article 4</h3>
                      <p class="card-text">Prix : 60euros</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="card" style="width: 18rem;">
              <a href="product.php">
                <img src="assets/images/objet.jpeg" class="card-img-top" alt="imag objet">
                <div class="card-body">
                  <div class="vintage">
                  </div>
                  <div id="row" class="row">
                    <div class="col-5">
                      <img id="macaron" src="assets/images/Macaron_Vintage.png" alt="">
                    </div>
                    <div class="col-7">
                      <h3 class="card-title">Article 4</h3>
                      <p class="card-text">Prix : 60euros</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="card" style="width: 18rem;">
              <a href="product.php">
                <img src="assets/images/objet.jpeg" class="card-img-top" alt="imag objet">
                <div class="card-body">
                  <div class="vintage">
                  </div>
                  <div id="row" class="row">
                    <div class="col-5">
                      <img id="macaron" src="assets/images/Macaron_Vintage.png" alt="">
                    </div>
                    <div class="col-7">
                      <h3 class="card-title">Article 4</h3>
                      <p class="card-text">Prix : 60euros</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="card" style="width: 18rem;">
              <a href="product.php">
                <img src="assets/images/objet.jpeg" class="card-img-top" alt="imag objet">
                <div class="card-body">
                  <div class="vintage">
                  </div>
                  <div id="row" class="row">
                    <div class="col-5">
                      <img id="macaron" src="assets/images/Macaron_Vintage.png" alt="">
                    </div>
                    <div class="col-7">
                      <h3 class="card-title">Article 4</h3>
                      <p class="card-text">Prix : 60euros</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin du contenu Produit -->
    </div>
  </div>
  <?php
    include 'vues/footer.php';
  ?>
  <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript" /></script>
  <script src="assets/js/main.js" type="text/javascript"></script>
  <script src="assets/js/product.js" type="text/javascript"></script>
  <script src="https://unpkg.com/webkul-micron@1.1.6/dist/script/micron.min.js" type="text/javascript"></script>
</body>
</html>
