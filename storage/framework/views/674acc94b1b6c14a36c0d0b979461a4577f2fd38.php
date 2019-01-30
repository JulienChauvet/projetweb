<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class='backgroun'>
  <div class="container-fluid margTop">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-1">
      </div>
      <div class="col-lg-10 col-md_12 col-sm-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <?php $__currentLoopData = $carrousel_events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrousel_event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->iteration <= 1): ?>
            <div class="item active">
              <img src="<?php echo e(url('storage/' . $carrousel_event->PictureLink)); ?>" alt="Bowling" style="width:100%;height:480px">
              <div class="carousel-caption d-none d-md-block">
                <h5><?php echo e($carrousel_event->Title); ?></h5>
                <p><?php echo e($carrousel_event->DateEvent); ?></p>
              </div>
            </div>
            <?php else: ?>
            <div class="item">
              <img src="<?php echo e(url('storage/' . $carrousel_event->PictureLink)); ?>" alt="Billard" style="width:100%;height:480px">
              <div class="carousel-caption d-none d-md-block">
                <h5><?php echo e($carrousel_event->Title); ?></h5>
                <p><?php echo e($carrousel_event->DateEvent); ?></p>
              </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- fin de la row du carousel -->
<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($loop->iteration % 2 == 1): ?>
  <div class="row">
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
    <div class="col-lg-5 col-md-8 col-sm-12">
      <?php if($role == "BDE"): ?>
    <u><input type="submit" name="com_1" value="supprimer" class="nop">
      <?php endif; ?>
      <?php if($role == "Cesi"): ?>
      <input type="submit" name="com_2" value="signaler" class="nop"></u>
      <?php endif; ?>
      <div class="card flex-md-row mb-4 shadow-sm h-md-250 hauteur">
        <div class="card-body d-flex flex-column align-items-start">
          <h3 class="mb-0">
            <a class="text-dark" href="#"><?php echo e($event->Title); ?></a>
          </h3>
          <div class="mb-1 text-muted"><?php echo e($event->DateEvent); ?></div>
          <div class ="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
             <!-- Trigger the Modal -->
             <img class="img-responsive" src="<?php echo e(url('storage/' . $event->PictureLink)); ?>" alt="<?php echo e($event->Title); ?>" style="width:90%;max-width:200px; max-height: 250px;">
             <!-- The Modal -->
             <div id="myModal" class="modal">
             </div> 
           </div>
           <div class="col-lg-8 col-md-8 col-sm-8">
            <p class="card-text mb-auto"><?php echo e($event->Description); ?></p>
            <br/>
            <a href="/évènements_futurs/évènement:<?php echo e($event->id); ?>">Lire plus >></a>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if($loop->iteration % 2 == 0): ?>
  <div class="col-lg-5 col-md-8 col-sm-12">
    <?php if($role == "BDE"): ?>
    <u><input type="submit" name="com_1" value="supprimer" class="nop">
      <?php endif; ?>
      <?php if($role == "Cesi"): ?>
      <input type="submit" name="com_2" value="signaler" class="nop"></u>
      <?php endif; ?>
    <div class="card flex-md-row mb-4 shadow-sm h-md-250 hauteur">
      <div class="card-body d-flex flex-column align-items-start">
        <h3 class="mb-0">
          <a class="text-dark" href="#"><?php echo e($event->Title); ?></a>
        </h3>
        <div class="mb-1 text-muted"><?php echo e($event->DateEvent); ?></div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <img src="<?php echo e(url('storage/' . $event->PictureLink)); ?>" class="img-responsive" alt="<?php echo e($event->Title); ?>" style="width:90%;max-width:200px; max-height: 250px;">
          </div>
          <div id="myModal2" class="modal2">
          </div> 
          <div class="col-lg-8 col-md-8 col-sm-8">
            <p class="card-text mb-auto"><?php echo e($event->Description); ?></p>
            <br/>
            <a href="/évènements_futurs/évènement:<?php echo e($event->id); ?>">Lire plus >></a>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="col-lg-1 col-md-0 col-sm-0">
  </div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>