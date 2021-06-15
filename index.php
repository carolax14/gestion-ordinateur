<?php include 'includes/connexion.php'; ?>
<?php include 'includes/fct.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Centre Culturel</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="robots" content="all,follow" />
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="public/outils/bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="public/outils/font-awesome/css/font-awesome.min.css" />
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="public/css/fontastic.css" />
  <!-- Google fonts - Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" />
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="public/css/style.default.css" id="theme-stylesheet" />
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="public/css/custom.css" />
  <!-- Favicon-->
  <link rel="shortcut icon" href="" />
</head>

<body>
  <div class="page login-page">
    <div class="container d-flex align-items-center">
      <div class="form-holder has-shadow">
        <div class="row">
          <!-- Logo & Information Panel-->
          <div class="col-lg-6">
            <div class="info d-flex align-items-center">
              <div class="content">
                <div class="logo">
                  <h1>Centre Culturel</h1>
                </div>
                <p>Bienvenu sur notre application</p>
              </div>
            </div>
          </div>
          <!-- Form Panel    -->
          <div class="col-lg-6 bg-white">
            <div class="form d-flex align-items-center">
              <div class="content">

                <?php if ($erreur) : ?>
                  <div class="alert bg-red text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <?= $erreur ?>
                  </div>
                <?php endif ?>

                <form method="post" action="" class="form-validate">
                  <div class="form-group">
                    <input id="login-username" type="text" name="login" placeholder="Nom utilisateur" required data-msg="Veuillez entrer votre login" class="input-material">
                    <!--                     <label for="login-username" class="label-material">Login</label>
 -->
                  </div>
                  <div class="form-group">
                    <input id="login-password" type="password" name="mdp" placeholder="Mot de passe" required data-msg="Veuillez entrer votre mot de passe" class="input-material">
                    <!--                     <label for="login-password" class="label-material">Mot de passe</label>
 -->
                  </div><a id="login" class="btn btn-primary">
                    <button type="submit" class="btn btn-primary" name="connexion">Connexion</button>
                  </a>
                  <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                </form><small>Horaire d'ouverture : 9h00 - 18h00 </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyrights text-center">
      <p>Carole Hafizou &copy; 2021</p>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="public/outils/jquery/jquery.min.js"></script>
  <script src="public/outils/popper.js/umd/popper.min.js"> </script>
  <script src="public/outils/bootstrap/js/bootstrap.min.js"></script>
  <script src="public/outils/jquery.cookie/jquery.cookie.js"> </script>
  <script src="public/outils/chart.js/Chart.min.js"></script>
  <script src="public/outils/jquery-validation/jquery.validate.min.js"></script>
  <!-- Main File-->
  <script src="js/front.js"></script>
</body>

</html>