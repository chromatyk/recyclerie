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
  <title>Mission Environnementale | Recyclerie du Pays Noyonnais | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="shortcut icon" type="assets/images/favicon.png" href="assets/images/favicon.png"/>
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/mission.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css" type="text/css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <?php
    include 'vues/header.php';
    ?>
    <!-- Fil d'ariane -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
        <li class="breadcrumb-item active">Missons</li>
      </ol>
    </nav>
    <!-- Fin du fil d'ariane -->
    <div class="container-fluid">
      <div id="main">
        <div class="row">
          <div class="col-12" id="titrePage">
            <h1>Les missions de la Recyclerie</h1>
          </div>
        </div>
        <div class="row">
          <a href="missionEnv.php">
            <div class="col-12 animated fadeInRight" id="missionEnv">
              <div class="fondColorEnv">
                <h2 class="linkOP">Mission Environnementale</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="row">
          <a href="missionEco.php">
            <div class="col-12 animated fadeInRight delay-02s" id="missionEco">
              <div class="fondColorEco">
              <h2 class="linkOP">Mission Économique</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="row">
          <a href="missionSocial.php">
            <div class="col-12 animated fadeInRight delay-04s" id="missionSociale">
              <div class="fondColorSociale">
              <h2 class="linkOP">Mission Sociale</h2>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'vues/footer.php';
  ?>
  <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript" /></script>
  <script src="assets/js/main.js" type="text/javascript"></script>
  <script src="assets/js/missionEnv.js" type="text/javascript"></script>
  <script src="https://unpkg.com/webkul-micron@1.1.6/dist/script/micron.min.js" type="text/javascript"></script>
</body>
</html>
