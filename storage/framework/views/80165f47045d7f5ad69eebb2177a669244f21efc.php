<?php $__env->startSection('content'); ?>

<form action="/inscription" method="POST">
    <?php echo e(csrf_field()); ?>


    <label for="text"><b> Prénom</b></label>
    <p><input type="text" placeholder="Entrez votre prénom" name="Firstname" value="<?php echo e(old('Firstname')); ?>" required></p>
    <?php if($errors->has('Firstname')): ?>
        <p><?php echo e($errors->first('Firstname')); ?></p>
    <?php endif; ?>

    <label for="text"><b> Nom</b></label>
    <p><input type="text" placeholder="Entrez votre nom" name="Lastname" value="<?php echo e(old('Lastname')); ?>" required></p>
    <?php if($errors->has('Lastname')): ?>
        <p><?php echo e($errors->first('Lastname')); ?></p>
    <?php endif; ?>

    <label for="text"><b> Campus</b></label>
    <p><input type="text" placeholder="Entrez le nom de votre campus" name="Localisation" value="<?php echo e(old('Localisation')); ?>" required></p>
    <?php if($errors->has('Localisation')): ?>
        <p><?php echo e($errors->first('Localisation')); ?></p>
    <?php endif; ?>

    <label for="email"><b> E-mail</b></label>
    <p><input type="email" placeholder="Entrez votre Email" name="Email" value="<?php echo e(old('Email')); ?>" required></p>
    <?php if($errors->has('Email')): ?>
        <p><?php echo e($errors->first('Email')); ?></p>
    <?php endif; ?>

    <label for="psw"><b> Mot de passe</b></label>
    <p><input type="password" placeholder="Entrez votre mot de passe" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}" required title="6 caractères minimum, une lettre majuscule, une lettre minuscule et un chiffre"></p>
    <?php if($errors->has('Password')): ?>
        <p><?php echo e($errors->first('Password')); ?></p>
    <?php endif; ?>

    <label for="psw-repeat"><b> Vérification mot de passe</b></label>
    <p><input type="password" placeholder="Répétez votre mot de passe" name="Password_confirmation" required></p>
    <?php if($errors->has('Password_confirmation')): ?>
        <p><?php echo e($errors->first('Password_confirmation')); ?></p>
    <?php endif; ?>

    <p><input type="submit" value="S'inscrire"></p>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>