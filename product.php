<!doctype html>
<html lang="fr">
<head>
  <!--        <base href="https://www.villeinfo.fr" />-->
  <!--        <meta name="generator" content="Jekyll v3.8.5" />-->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Site de la recyclerie du Pays Noyonnais" />
  <meta name="publisher" content="Kaiartsu">
  <meta name="author" content="Kaiartsu" />
  <meta name="reply-to" content="contact@kaiartsu.fr">
  <title>Accueil | Recyclerie du Pays Noyonnais | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="shortcut icon" type="assets/images/logo/fav.png" href="assets/images/Logo.png"/>
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/product.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css" type="text/css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
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
            <div class="image-container">
              <div class="image-1" onclick="openModal();currentSlide(1)" style="background-image:url('https://images.unsplash.com/photo-1568051243847-b6319fad107c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')"></div>
              <div class="image-2" onclick="openModal();currentSlide(2)" style="background-image:url('https://images.unsplash.com/photo-1568094328197-3d83d7cbfe94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')"></div>
              <div class="image-3" onclick="openModal();currentSlide(3)" style="background-image:url('https://images.unsplash.com/photo-1562101806-b8ebd0e33011?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')"></div>
              <div class="image-4" onclick="openModal();currentSlide(4)" style="background-image:url('https://images.unsplash.com/photo-1568022316712-0886fa296902?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')"></div>
            </div>
            <div class="thumbnails">
              <label for="image1" style="background-image:url('https://images.unsplash.com/photo-1568051243847-b6319fad107c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')"></label>
              <label for="image2" style="background-image:url('https://images.unsplash.com/photo-1568094328197-3d83d7cbfe94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')"></label>
              <label for="image3" style="background-image:url('https://images.unsplash.com/photo-1562101806-b8ebd0e33011?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')"></label>
              <label for="image4" style="background-image:url('https://images.unsplash.com/photo-1568022316712-0886fa296902?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')"></label>
            </div>
          </div>
        </div>

        <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">

            <div class="mySlides">
              <div class="numbertext">1 / 4</div>
              <img src="https://images.unsplash.com/photo-1568051243847-b6319fad107c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 4</div>
              <img src="https://images.unsplash.com/photo-1568094328197-3d83d7cbfe94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 4</div>
              <img src="https://images.unsplash.com/photo-1562101806-b8ebd0e33011?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 4</div>
              <img src="https://images.unsplash.com/photo-1568022316712-0886fa296902?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" style="width:100%">
            </div>

            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

          </div>
        </div>
        <!-- Fin image & carousel du Produit-->
        <!-- Texte, description, nom du Produit-->
        <div class="col-lg-6 offset-lg-1 textProduct">
          <h1>Nom du produit</h1>
          <!-- Barre état -->
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
              <div class="media">
                <img src="assets/images/placeholder.jpg" class="mr-3" alt="...">
                <div class="media-body">
                  <h5 class="mt-0">Jean michel de la Compta</h5>
                  A refait ce meuble-ci.
                </div>
              </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-2 offset-md-1 col-sm-2 offset-sm-1 col-5 offset-1 macaronProduct">
              <img src="assets/images/Macaron_Vintage.png" />
            </div>
          </div>
          <!-- Fin barre état -->
          <div class="row">
            <div class="col-lg-8">
              <p class="description">
                Cognitis enim pilatorum caesorumque funeribus nemo deinde ad has stationes appulit navem, sed ut Scironis praerupta letalia declinantes litoribus Cypriis contigui navigabant, quae Isauriae scopulis sunt controversa.

                Nec vox accusatoris ulla licet subditicii in his malorum quaerebatur acervis ut saltem specie tenus crimina praescriptis legum committerentur, quod aliquotiens fecere principes saevi: sed quicquid Caesaris implacabilitati sedisset, id velut fas iusque perpensum confestim urgebatur impleri.

                Sed tamen haec cum ita tutius observentur, quidam vigore artuum inminuto rogati ad nuptias ubi aurum dextris manibus cavatis offertur, inpigre vel usque Spoletium pergunt. haec nobilium sunt instituta.
              </p>
            </div>
            <div class="col-lg-4">
              <p class="price">
                45.00€
              </p>
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
              <img src="assets/images/Logo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/Logo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/Logo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/Logo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
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
