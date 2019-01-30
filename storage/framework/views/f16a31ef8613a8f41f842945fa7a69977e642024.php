<!-- child of the page : layout.blade.php -->


<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<?php $__env->stopSection(); ?>

<!-- body of the layout -->
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-lg-1 col-md-1 col-sm-1">
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10">
    <div class="jumbotron jumbotron-fluid jambon">
      <div class="container">
        <h1 class="display-4"><b>Les événements passés !</b></h1>
        <p class="lead"><b>Postez des photos et des commentaires, faites vous plaisirs ;)</b></p>
      </div>
    </div>
  </div>
  <div class="col-lg-1 col-md-1 col-sm-1">
  </div>
</div>
<!-- for each events -->
<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container-fluid margTop">
  <div class="row">
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
    <div class="col-lg-10 col-md-12 col-sm-0">
      <div class="accordion" id="acc1">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <!-- make a button with the title of the event -->
              <button class="btn btn-link" type="button" data-toggle="collapse" style="width:1500px; float:center;" data-target="#collapse<?php echo e($event->id); ?>" aria-expanded="true" aria-controls="collapse<?php echo e($event->id); ?>">
                <?php echo e($event->Title); ?>

              </button>
            </h5>
          </div>
          <div id="collapse<?php echo e($event->id); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#acc1">
            <div class="card-body">
              <div class="container-fluid">
                <div class="row">
                  <!-- using data from the database -->
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="taille" src="<?php echo e(url('storage/' . $event->PictureLink)); ?>" alt="event">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <p><?php echo e($event->DateEvent); ?> - <?php echo e($event->Recurrence); ?></p>
                    <p><?php echo e($event->Description); ?></p>
                    <a href="/évènements_passés/évènement:<?php echo e($event->id); ?>"><p>voir plus >></p></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>