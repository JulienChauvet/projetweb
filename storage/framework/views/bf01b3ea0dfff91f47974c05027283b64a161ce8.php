<?php $__env->startSection('content'); ?>

<head>
  <title>BDE.CESI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/styleconnection.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/nav.css')); ?>"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/background.css')); ?>"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>


<body>
  <div class="bak">

  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-1">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-5 backgL backGL">
      <form action="/inscription" method="POST">
        <?php echo e(csrf_field()); ?>

          <div class="container">
            <h1>Créez-vous un espace personnel !</h1>
            <p><a href="#" style="color:red">*</a> champs obligatoires</p>
            <hr>

            <label for="text"><b> Prénom</b></label>
            <input type="text" placeholder="Entrez votre prénom" name="Firstname" value="<?php echo e(old('Firstname')); ?>" required>
            <?php if($errors->has('Firstname')): ?>
                <p class="alert alert-danger"><?php echo e($errors->first('Firstname')); ?></p>
            <?php endif; ?>

            <label for="text"><b> Nom</b></label>
            <input type="text" placeholder="Entrez votre nom" name="Lastname" value="<?php echo e(old('Lastname')); ?>" required>
            <?php if($errors->has('Lastname')): ?>
                <p class="alert alert-danger"><?php echo e($errors->first('Lastname')); ?></p>
            <?php endif; ?>

            <label for="text"><b> Campus</b></label>
            <input type="text" placeholder="Entrez le nom de votre campus" name="Localisation" value="<?php echo e(old('Localisation')); ?>" required>
            <?php if($errors->has('Localisation')): ?>
                <p class="alert alert-danger"><?php echo e($errors->first('Localisation')); ?></p>
            <?php endif; ?>

            <label for="email"><b> E-mail</b></label>
            <input type="email" placeholder="Entrez votre Email" name="Email" value="<?php echo e(old('Email')); ?>" required>
            <?php if($errors->has('Email')): ?>
                <p class="alert alert-danger"><?php echo e($errors->first('Email')); ?></p>
            <?php endif; ?>

            <label for="psw"><b> Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}" required title="6 caractères minimum, une lettre majuscule, une lettre minuscule et un chiffre">
            <?php if($errors->has('Password')): ?>
                <p class="alert alert-danger"><?php echo e($errors->first('Password')); ?></p>
            <?php endif; ?>

            <label for="psw-repeat"><b> Vérification mot de passe</b></label>
            <input type="password" placeholder="Répétez votre mot de passe" name="Password_confirmation" required>
            <?php if($errors->has('Password_confirmation')): ?>
                <p class="alert alert-danger"><?php echo e($errors->first('Password_confirmation')); ?></p>
            <?php endif; ?>

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
        <form action="/connexion" method="POST">
          <?php echo e(csrf_field()); ?>

          <div class="container">
            <h1>Connectez-vous à votre espace personnel</h1>
            <p><a href="#" style="color:red">*</a> champs obligatoires</p>
            <hr>

            <label for="email"><b> E-mail</b></label>
            <input type="email" placeholder="Entrez votre Email" name="Email" value="<?php echo e(old('Email')); ?>" required>
            <?php if($errors->has('Email')): ?>
                <p class="alert alert-danger"><?php echo e($errors->first('Email')); ?></p>
            <?php endif; ?>

            <label for="psw"><b> Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="Password" required>
            <?php if($errors->has('Password')): ?>
                <p class="alert alert-danger"><?php echo e($errors->first('Password')); ?></p>
            <?php endif; ?>

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
            <u><a href="/inscription" style="color:white">Créez votre espace maintenant !</a></u>
            <div class="col-sm-12 col-md-6 col-lg-1">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>