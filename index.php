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
  <title>Accueil | Recyclerie du Pays Noyonnais | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="shortcut icon" type="assets/images/logo/fav.png" href="assets/images/favicon.png"/>
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<?php
include_once 'models/dataBase.php';
include_once 'models/shopModel.php';
include_once 'controlers/carouselControler.php';
?>
<body>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0"></script>
  <div class="container-fluid">
    <?php
    include 'vues/header.php';
    ?>
    <div class="news">
      <div class="newsAlerte" style="background-image:url('assets/images/news.jpg');">
        <div class="newsAlerte pictureFilter">
          <div class="row">
            <div class="mx-auto" id="title">
              <p>
                Titre de la News
              </p>
            </div>
          </div>
          <div class="row">
            <div class="mx-auto">
              <button id="buttonNews" class="fill" onclick="window.location.href='allArticles.php'">En savoir plus</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lastProducts">
      <div class="row">
        <div class="col-12">
          <h2 id="newsProducts">Nouveautés en boutique</h2>
        </div>
      </div>
      <div class="row">

        <div class="col-12 carourou">
          <div id="carousel">
            <?php foreach ($allProducts as $allProducts){ ?>
            <div class="" style="width: 18rem;">
              <a href="product.php?idProduct=<?= $allProducts->id ?>" class="card tilt tilt-logo"  data-tilt data-tilt-glare="true" data-tilt-scale="1.1">
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

              </a>
            </div>

            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
    <div class="">
      <div class="row">
        <div class="col-12 greenBand">
        </div>
      </div>
      <div class="row">
        <div class="col-12 imgHours">
          <div class="hours">
            <div class="row">
              <div class="col-lg-8">
                <h2>Nos Horaires</h2>
                <div class="row">
                  <div class="col-12 offset-lg-2 col-lg-4 textHours">
                    <p class="upHours">Dépôts:</p>
                    <p>Du Lundi au Vendredi <br> de 8h30 à 12h15 <br> et de 13h30 à 17h15</p>
                    <p>Le Samedi de 10h à 17h</p>
                  </div>
                  <div class="col-12 offset-lg-2 col-lg-4 textHours">
                    <p class="upHours">L'atelier de vente :</p>
                    <p>Mercredi et Vendredi <br> de 13h30 à 17h30</p>
                    <p>Le Samedi de 10h à 17h30</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fb-post" data-href="https://www.facebook.com/20531316728/posts/10154009990506729/" data-width="350" data-show-text="true"><blockquote cite="https://developers.facebook.com/20531316728/posts/10154009990506729/" class="fb-xfbml-parse-ignore">Publiée par <a href="https://www.facebook.com/facebook/">Facebook</a> sur&nbsp;<a href="https://developers.facebook.com/20531316728/posts/10154009990506729/">Jeudi 27 août 2015</a></blockquote></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 greenBand">
        </div>
      </div>
    </div>
    <div class="missionRecyclerie">
      <h2>Nos missions principales</h2>
      <div class="video-container">
  <video autoplay poster="" class="video-parallax" loop muted>
<source src="assets/video/videoFond.mp4" type="video/mp4">
  </video>
</div>
      <div class="row lineAxes">
        <div class="col-lg-3 imgMission">
          <img src="assets/images/economie.jpg" alt="">
          <div class=" nomMission">
              <h3 class="mx-auto">ENVIRONNEMENT</h3>
          </div>
        </div>
        <div id="firstMission" class="col-lg-3 mx-auto F1-1" style="background-color:#74BDED;">
          <a href="missionEnv.php#ressourcesNaturelles"><h3>Préserver les ressources et les milieux naturels</h3></a>
          <i class="fab fa-pagelines"></i>
        </div>
        <div id="firstMission" class="col-lg-3 mx-auto F1-2" style="background-color:#74C9D6;">
          <a href="missionEnv.php#déchetsFeu"><h3>Réduire les volumes de déchets envoyés à l'incinération</h3></a>
          <i class="fas fa-fire"></i>
        </div>
        <div id="firstMission" class="col-lg-3 mx-auto F1-3" style="background-color:#74EDDC;">
          <a href="missionEnv.php#gaspillage"><h3>Réduire les gaspillages, adopter de nouveaux comportement</h3></a>
          <i class="fas fa-dumpster"></i>
        </div>
      </div>
      <div class="row lineAxes">
        <div id="firstMission" class="col-lg-3 mx-auto F2-1" style="background-color:#D179ED;">
          <a href="missionEco.php#gaspillage"><h3>Transformer les encombrants en ressources</h3></a>
          <i class="fas fa-dolly"></i>
        </div>
        <div id="firstMission" class="col-lg-3 mx-auto F2-2" style="background-color:#A578D6;">
          <a href="missionEco.php#déchetsFeu"><h3>Récupérer les matières premières</h3></a>
          <i class="fas fa-recycle"></i>
        </div>
        <div id="firstMission" class="col-lg-3 mx-auto F2-3" style="background-color:#9179ED;">
          <a href="missionEco.php#ressourcesNaturelles"><h3>Réduire le coût de la collecte des déchets ménagers</h3></a>
          <i class="fas fa-euro-sign"></i>
        </div>
        <div class="col-lg-3 imgMission">
          <img src="assets/images/environnement.jpg" alt="">
          <div class=" nomMission">
              <h3 class="mx-auto">ÉCONOMIE</h3>
          </div>
        </div>
      </div>
      <div class="row lineAxes" id="last">
        <div class="col-lg-3 imgMission">
          <img src="assets/images/social.jpg" alt="">
          <div class=" nomMission">
              <h3 class="mx-auto">SOCIAL</h3>
          </div>
        </div>
        <div id="firstMission" class="col-lg-3 mx-auto F3-1" style="background-color:#EDC45A;">
          <a href="missionSocial.php#ressourcesNaturelles"><h3>Développer de nouveaux métiers</h3></a>
          <i class="fas fa-briefcase"></i>
        </div>
        <div id="firstMission" class="col-lg-3 mx-auto F3-2" style="background-color:#D6A75D;">
          <a href="missionSocial.php#déchetsFeu"><h3>Mobiliser des jeunes et adultes en situation d'exclusion et les accompagner dans la préparation de leur avenir professionnel et leur projet de vie</h3></a>
          <i class="fas fa-child"></i>
        </div>
        <div id="firstMission" class="col-lg-3 mx-auto F3-3" style="background-color:#EDA25A;">
          <a href="missionSocial.php#gaspillage"><h3>Lieu d'échange et de rencontre</h3></a>
          <i class="fas fa-hands-helping"></i>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2587.1039563402064!2d3.000828416039543!3d49.576927979364385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e873da4d530e49%3A0x508ab07261e78522!2sLa%20Recyclerie%20du%20Pays%20Noyonnais!5e0!3m2!1sfr!2sfr!4v1568632016544!5m2!1sfr!2sfr" width="100%" height="480" frameborder="10" style="border:10px;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
  <?php
  include 'vues/footer.php';
  ?>
  <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript" /></script>
  <script src="assets/js/main.js" type="text/javascript"></script>
  <script src="assets/js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
  <script src="assets/js/tilt.js"></script>
</body>
</html>
