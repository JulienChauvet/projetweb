<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-lg-1 col-md-1 col-sm-1">
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10">
    <div class="jumbotron jumbotron-fluid jambon">
      <div class="container">
        <h1 class="display-4"><b>Les commandes</b></h1>
        <p class="lead"><b>Les différentes commandes passés par les eXars</b></p>
      </div>
    </div>
  </div>
  <div class="col-lg-1 col-md-1 col-sm-1">
  </div>
</div>
<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container-fluid margTop">
  <div class="row">
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
    <div class="col-lg-10 col-md-12 col-sm-0">
      <div class="accordion" id="acc1">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($user->id == $order->id_Users ): ?>
              <button class="btn btn-link" type="button" data-toggle="collapse" style="width:1500px; float:center;" data-target="#collapse<?php echo e($order->id); ?>" aria-expanded="true" aria-controls="collapse<?php echo e($order->id); ?>">
                <?php echo e($user->Firstname); ?> <?php echo e($user->Lastname); ?>

              </button>
              <?php break; ?>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </h5>
          </div>
          <div id="collapse<?php echo e($order->id); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#acc1">
            <div class="card-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><b>Nom des articles</b></p>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articleArray): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $articleArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($article->id_Orders == $order->id): ?>
                    <p><?php echo e($article->Name); ?></p>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><b>Quantité</b></p>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articleArray): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $articleArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($article->id_Orders == $order->id): ?>
                    <p><?php echo e($article->quantity); ?></p>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><b>Prix</b></p>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articleArray): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $articleArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($article->id_Orders == $order->id): ?>
                    <p><?php echo e($article->Price); ?> €</p>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <form action="/boutique/commande:<?php echo e($order->id); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2">
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><b>Prix total: <?php echo e($total_price[$loop->iteration-1]); ?> €</b></p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><input type="date" class="centre" name="dateMeeting"></p>
                    <?php if($errors->has('dateMeeting')): ?>
                    <p class="alert alert-danger"><?php echo e($errors->first('dateMeeting')); ?></p>
                    <?php endif; ?>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><input type="text" class="centre" name="localisation" placeholder="Le lieu de rendez-vous"></p>
                    <?php if($errors->has('localisation')): ?>
                    <p class="alert alert-danger"><?php echo e($errors->first('localisation')); ?></p>
                    <?php endif; ?>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><input type="submit" class="btn btn-info" value="Proposer"></p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <a href="/boutique/commande:<?php echo e($order->id); ?>" type="submit" class="btn btn-success">Valider la commande</a>
                  </div>
                </div>
                </form>
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