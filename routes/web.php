<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">


<head>
  <title>BDE.CESI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="../public/css/styleConnexion.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../public/css/background.css" />

</head>



<body>
<center>
  <header>

  </header>
</center>






  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-1">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-5 backgL backGL">
        <form method="post" onSubmit="return validation(this)" action="../public/php/verifmdp.php">
          <div class="container">
            <h1>Créez-vous un espace personnel !</h1>
            <p><a href="#" style="color:red">*</a> champs obligatoires</p>
            <hr>

            <label for="email"><a href="#" style="color:red">*</a><b> Nom</b></label>
            <input type="text" placeholder="Entrez votre nom" name="nom" required>

            <label for="email"><a href="#" style="color:red">*</a><b> Prénom</b></label>
            <input type="text" placeholder="Entrez votre prénom" name="prenom" required>

            <label for="email"><a href="#" style="color:red">*</a><b> Centre CESI</b></label>
            <input type="text" placeholder="Entrez le nom de votre campus" name="localisation" required>

            <label for="email"><a href="#" style="color:red">*</a><b> E-mail</b></label>
            <input type="email" placeholder="Entrez votre Email" name="email" required>

            <label for="psw"><a href="#" style="color:red">*</a><b> Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="psw" pattern=".{6,}" required title="6 caractères minimum, une lettre majuscule, une lettre minuscule et un chiffre">

            <label for="psw-repeat"><a href="#" style="color:red">*</a><b> Vérification mot de passe</b></label>
            <input type="password" placeholder="Répétez votre mot de passe" name="pswrepeat" required>

            <form method="g-recaptcha" action="../public/php/formm.php">
              <div class="g-recaptcha" data-sitekey="6LdznooUAAAAAOisR8q-AmqPYR5bNhPArtbyGM3A"></div>
              <br>
              <br>
            </form>

            <p>En créant un compte vous acceptez nos <a href="#" style="color:dodgerblue">conditions d'utilisations</a>.</p>

            <div class="clearfix">
              <button type="submit" class="signupbtn"><strong>Inscription</strong></button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-5 backgR backGL">
        <form action="Connexion.php">
          <div class="container">
            <h1>Connectez-vous à votre espace personnel</h1>
            <p><a href="#" style="color:red">*</a> champs obligatoires</p>
            <hr>

            <label for="email"><b><a href="#" style="color:red">*</a> E-mail</b></label>
            <input type="text" placeholder="Entrez votre Email" name="email" required>

            <label for="psw"><b><a href="#" style="color:red">*</a> Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>

            <label class="remember">
              <input type="checkbox" checked="checked" name="remember"  style="margin-bottom:15px"> se souvenir de moi
            </label>


            <form method="g-recaptcha" action="../public/php/formm.php">
              <div class="g-recaptcha" data-sitekey="6LdznooUAAAAAOisR8q-AmqPYR5bNhPArtbyGM3A"></div>
              <br>
              <br>
            </form>


            <div class="clearfix">
              <button type="submit" class="signupbtn"><strong>CONNECTEZ-VOUS</strong></button>
            </div>
            <u><a href="#" style="color:white">Mot de passe oublié ?</a></u>
            <br>
            <br>
            <p>Vous n'avez pas encore d'espace personnel pour vous inscrire ?</p>
            <u><a href="#" style="color:white">Créez votre espace maintenant !</a></u>
            <div class="col-sm-12 col-md-6 col-lg-1">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>







  <footer class="container-fluid text-center">

    <p>Retrouvez l'actualité du BDE sur</p>
    <br>
    <i class="fab fa-facebook-square"></i>
    <br>
    <br>
    <a href="#" style="color:white">Politique de confidentialité</a>
    <a href="#" style="color:white">Mentions légales</a>
    <a href="#" style="color:white">Crédits</a>
    <a href="#" style="color:white">© BDE 2018</a>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="../public/js/validation.js"></script>
</body>
</html>
