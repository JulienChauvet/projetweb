<!-- child of the page : layout.blade.php -->


<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/styleconnection.css')); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<?php $__env->stopSection(); ?>

<!-- body of the page : layout.blade.php -->
<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3">
  </div>
<div class="col-sm-6 col-md-6 col-lg-6">
  <form action="/connexion" method="POST">
    <?php echo e(csrf_field()); ?>

    <div class="container">
      <!-- check the data from the database to verif if they had an account -->
      <h1 class="blanc">Connectez-vous à votre espace personnel</h1>
      <p class="blanc"><a style="color:red">*</a> champs obligatoires</p>
      <hr>
      <label for="email" class="blanc"><b> E-mail : </b></label>
      <br>
      <input type="email" placeholder="Entrez votre Email" name="Email" value="<?php echo e(old('Email')); ?>" required>
      <?php if($errors->has('Email')): ?>
      <p class="alert alert-danger"><?php echo e($errors->first('Email')); ?></p>
      <?php endif; ?>
      <br>
      <label for="psw" class="blanc"><b> Mot de passe : </b></label>
      <br>
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
        <button type="submit" class="signupbtn" class="blanc"><strong>CONNECTEZ-VOUS</strong></button>
      </div>
      <u><a href="#" style="color:white">Mot de passe oublié ?</a></u>
      <br>
      <br>
      <!-- let poeple to go to the register page if they havn't account -->
      <p class="blanc">Vous n'avez pas encore d'espace personnel pour vous inscrire ?</p>
      <u><a href="/inscription" style="color:white">Créez votre espace maintenant !</a></u>
      <div class="col-sm-12 col-md-6 col-lg-1">
      </div>
    </div>
  </form>
</div>
<div class="col-lg-3 col-md-3 col-sm-3">
  </div>
</div>
<br class="bas">




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>