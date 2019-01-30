<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/block.css')); ?>"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="../js/number.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
      <div class="centremc">
        <div class="card text-center">
          <div class="card-header">
            Mes Informations
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo e($user->Firstname); ?> <?php echo e($user->Lastname); ?></h5>
            <p class="card-text"><?php echo e($user->Localisation); ?></p>
            <p class="card-text"><?php echo e($user->Email); ?></p>
            <a href="/compte/photos" class="btn btn-primary">Télécharger toutes les photos</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
      <div class="centremc">
        <div class="accordion" id="acc1">
          <div class="card" id="headingOne">
            <h5 class="mb-0">
              <button  class="btn btn-link black" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Mon Panier
              </button>
              <button class="btn btn-link black" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Mes Inscriptions
              </button>
            </h5>
            <!-- PANIER -->
            <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#acc1">
              <div class="card-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="panel tryed">
                        <br>

                        <div class="row try">
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-lg-3">
                            <img src="<?php echo e(url('storage/' . $article->PictureLink)); ?>" class="taille">
                          </div>
                          <div class="col-lg-1"></div>
                          <div class="col-lg-6">
                            <h6 class="drop"><?php echo e($article->Name); ?></h6>
                            <small class="ct"><?php echo e($article->Description); ?></small>
                            <p class="drop"><?php echo e($article->Price); ?>€</p>
                          </div>
                          <div class="col-lg-1">
                            <div class="dropdrop">
                              <a href="/compte/retirer_du_panier:<?php echo e($article->id); ?>" type="button" class="btn btn-default" aria-label="Left Align">
                                <i class="fas fa-trash-alt"></i>
                              </a>             
                            </div>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                      </div>
                    </div> 
                    <?php if($articles): ?>
                    <div class="col-lg-4">
                      <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Votre panier</span>
                        <span class="badge badge-secondary badge-pill"><?php echo e(sizeof($articles)); ?></span>
                      </h4>
                      <ul class="list-group mb-3">

                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0"><?php echo e($article->Name); ?></h6>
                            <?php $__currentLoopData = $ordered_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ordered_article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                            <?php if($ordered_article->id == $article->id): ?>
                            <small class="text-muted">x<?php echo e($ordered_article->quantity); ?></small>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                          <span class="text-muted"><?php echo e($article->Price); ?>€</span>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                        <a class="list-group-item d-flex justify-content-between">
                          <span>Total (EU)</span>
                          <b><?php echo e($total_price); ?> €</b>
                        </a>
                      </ul>
                    </div>
                    <a href="/compte/commande" type="button" class="btn btn-warning btn-lg btn-block">Passer commande</a> 
                    <?php else: ?>
                    <small class="text-muted">Votre panier est vide</small>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

            <!-- INSCRIPTIONS -->
            <div id="collapseTwo" class="collapse hide" aria-labelledby="headingOne" data-parent="#acc1">
              <div class="card-body"> 
                <?php if($events): ?>
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-3 col-sm-2"><img src="<?php echo e(url('storage/' . $event->PictureLink)); ?>" class="size"/>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <?php echo e($event->Title); ?>

                    </div>
                    <div class="col-lg-3 col-sm-3">
                      <?php echo e($event->DateEvent); ?>

                    </div>
                    <div class="col-lg-2 col-sm-3">
                      <a href="/évènements_futurs/désinscription:<?php echo e($event->id); ?>" class="btn btn-danger white">
                        Se désinscrire
                      </a>
                    </div>
                  </div>  
                </div>                 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <small class="text-muted">Vous êtes inscrit à aucun évènement.</small>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
    </div>
  </div> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>