<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/article.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2">
      <img src="<?php echo e(url('storage/' . $event->PictureLink)); ?>" alt="img principal event" id="mainImg">
  </div>
  <div class="col-lg-4 text-white p-md-10 big">
      <h1 class="display-4 font-italic"><?php echo e($event->Title); ?></h1>
      <h7><?php echo e($event->DateEvent); ?></h7>
      <p class="lead my-3"><?php echo e($event->Description); ?></p>
  </div>
  <div class=col-lg-4>

     <form class="section upmarg" action="/évènements_passés/ajout_de_photos:<?php echo e($event->id); ?>" method="POST" enctype="multipart/form-data">
      <?php echo e(csrf_field()); ?>


      <input type="file" name="AddPicure" value="<?php echo e(old('AddPicure')); ?>" accept="image/png, image/jpeg">
      <br>
      <button class="button is-link bouton" type="submit">Ajouter l'image</button> 
      <?php if($errors->has('AddPicure')): ?>
      <p class="alert alert-danger"><?php echo e($errors->first('AddPicure')); ?></p>
      <?php endif; ?>
  </form>
</div>
</div>
</div>


<?php for($i=0; $i < sizeof($pictures); $i++): ?>
<hr>
<div class="backgroun">
  <div class="row">
    <div class="col-lg-11">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <img src="<?php echo e(url('storage/' . $pictures[$i]->Link)); ?>" style="width: 100%" alt="photo évènements">
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1">
        <div class="input-group input-number-group">
          <div class="input-group-button">
            <a class="btn like">
              <i  id="voted" class="far fa-thumbs-up bleu input-number-increment"></i>
          </a>
      </div>
      <input type="text" class="input-number" value="0" min="0" max="1000" disabled>
  </div>
</div>
<div class="col-lg-5 col-md-5 col-sm-5">
    <div class="scrollbar">
      <?php $__currentLoopData = $comments[$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="commsuppr">
      <div class="commentaire">
        <?php for($n=0; $n < sizeof($authors); $n++): ?>
        <?php if($comment->id_users == $authors[$n]->id): ?>
        <h5 class="blanc" alt="nom utilisateur commentaire"><?php echo e($authors[$n]->Firstname); ?> <?php echo e($authors[$n]->Lastname); ?>:</h5>

        <?php endif; ?>
        <?php endfor; ?>
        <p class="blanc"><?php echo e($comment->Content); ?></p>
    </div>
    <div class="col-lg-2">
        <?php if($role == "BDE"): ?>
        <u><a href="/évènements_passés/suppresion_de_commentaire:<?php echo e($comment->id); ?>"><input type="submit" name="com_1" value="supprimer" class="nop suppr"></a>
          <?php endif; ?>
          <?php if($role == "Cesi"): ?>
          <a href='/signalement:{id}'><input type="submit" name="com_2" value="signaler" class="nop"></u></a>
          <?php endif; ?>
      </div>
    </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
</div>
</div>
</div>


<div class="backgroun">
  <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-7">
    </div>  
    <div class="col-lg-3 col-md-3 col-sm-3">
      <form class="section upmarg" action="/évènements_passés/ajout_de_commentaire:<?php echo e($pictures[$i]->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>


        <input type="text" name="Commentary" id="cible" placeholder="Entrez votre commentaire..." class="com" value="" >
        <?php if($errors->has('Commentary')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('Commentary')); ?></p>
        <?php endif; ?>
        <button class="button is-link bouton" type="submit">Envoyer</button>
        </form>
    </div>
</div>
</div>


<div class="backgroun">
  <div class="row">
    <div class="col-lg-8">
      <?php if($role == "BDE"): ?>
      <u><input type="submit" name="com_1" value="supprimer" class="nop">
        <?php endif; ?>
        <?php if($role == "Cesi"): ?>
        <input type="submit" name="com_2" value="signaler" class="nop"></u> 
        <?php endif; ?>
    </div>
</div>
</div>
</hr>
<?php endfor; ?>

<script type="text/javascript" src="../js/script.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>