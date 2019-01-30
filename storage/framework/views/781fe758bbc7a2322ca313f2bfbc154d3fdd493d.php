<!-- child of the page : layout.blade.php -->


<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<?php $__env->stopSection(); ?>

<!-- body from layout -->
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-4 col-md-2 col-sm-2">
      <!-- image from the database, which is link with the event -->
      <img src="<?php echo e(url('storage/' . $event->PictureLink)); ?>" alt="img principal event" id="mainImg" class="taille">
    </div>
    <div class="col-lg-6 text-white p-md-10 big">
      <!-- Title of the Event from database ($event is make in the controller) -->
      <h1 class="display-4 font-italic"><?php echo e($event->Title); ?></h1>
      <!-- Date of the event from database (same for the date) -->
      <p class="lead my-3"><?php echo e($event->DateEvent); ?></p>
      <!-- Description take from the database (same here) -->
      <p class="justy blanc"><?php echo e($event->Description); ?></p>
    </div>
    <div class=col-lg-3>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-1">
  </div>
  <div class="col-lg-10">
    <!-- if he is not connected -->
    <?php if($registered == false): ?>
    <a class="btn btn-success btn-lg btn-block" href="/évènements_futurs/inscription:<?php echo e($event->id); ?>">S'INSCRIRE</a>
    <?php endif; ?>
  </div>
  <div class="col-lg-1">
  </div>
</div>
<!-- if he is not connected as a studient -->
<?php if($role != 'Etudiant'): ?>
<div class="row">
  <div class="col-lg-1">
  </div>
  <div class="col-lg-10">
    <div class="col-lg-4">
      <!-- this button will make us download all the pictures in csv or pdf -->
      <a href="#"><button type="button" class="btn tomato"><b>Télécharger</b></button></a>
    </div>
    <div class="col-lg-8">
      <SELECT name="nom" size="1" class="csv">
        <OPTION>Télécharger sous formats CSV
          <OPTION>Télécharger sous formats PDF
          </SELECT>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-1">
      </div>
      <div class="col-lg-5">
      </div>
      <div class="col-lg-1 screen">
      </div>
    </div>
  </div>
</div>

<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>