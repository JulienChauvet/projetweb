<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="space">
  <div class="container-fluid ">
    <div class="row space">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div>
          <div class="titrebloc">
            <h3>L'exia Strasbourg</h3>
          </div>
          <div class="descriptionbloc blanc">
            <p>Bienvenue sur le site du Bureau des Élèves de l’école d’ingénieurs en informatique du CESI de Strasbourg.</p>
            <p>L’exia.CESI est présente dans 15 centres en France. L’exia.CESI Strasbourg forme des professionnels de l’informatique à la pointe de la technique, des managers autonomes, communicants, sachant travailler en groupe. L’École marque sa différence par sa pédagogie innovante et sa proximité avec le monde professionnel.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9">
          <div class="titrebloc">
            <h3><?php echo e($monthEvent->Title); ?></h3>
        </div>
        <a href="/évènements_futurs"><img src="<?php echo e(url('storage/' . $monthEvent->PictureLink)); ?>" name="image du top évènements" class="img"></a>
      </div>
    </div>
    <div class="row space">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div>
          <div class="titrebloc">
            <h3>Actualité</h3>
          </div>
          <div class="descriptionbloc">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <?php $__currentLoopData = $carrousel_events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrousel_event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->iteration <= 1): ?>
                <div class="carousel-item active ">
                  <a href="/évènements_futurs/évènement:<?php echo e($carrousel_event->id); ?>"><img class="d-block w-100" src="<?php echo e(url('storage/' . $carrousel_event->PictureLink)); ?>" alt="slide" style="height:480px;"></a>
                </div>
                <?php else: ?>
                <div class="carousel-item">
                  <a href="/évènements_futurs/évènement:<?php echo e($carrousel_event->id); ?>"><img class="d-block w-100" src="<?php echo e(url('storage/' . $carrousel_event->PictureLink)); ?>" alt="slide" style="height:480px;"></a>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div>
          <div class="titrebloc">
            <h3>Nos meilleurs ventes</h3>
          </div>
          <div class="descriptionbloc">
            <div class="container-fluid">
              <?php $__currentLoopData = $mostSoldArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mostSoldArticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary"></strong>
                      <h3 class="mb-0">
                        <a class="text-dark" href="#"><?php echo e($mostSoldArticle->Name); ?></a>
                      </h3>
                      <div class="mb-1 text-muted">20€</div>
                      <p class="card-text mb-auto"><?php echo e($mostSoldArticle->Description); ?></p>
                      <a href="#">Check</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php echo e(url('storage/' . $mostSoldArticle->PictureLink)); ?>" data-holder-rendered="true">
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="ptitbloc">
          <div class="titrebloc">
            <h3>Idées les plus like</h3>
          </div>
          <div class="descriptionbloc">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-lg-6">
                  <div class="flip-card-v2">
                    <div class="flip-card-inner-v2">
                      <div class="flip-card-front-v2">
                        <img src="./Image/imagetest2.jpg" alt="Avatar" style="width:375px;height:200px;">
                        <div>
                          <p>Course de moto</p>
                        </div>
                      </div>
                      <div class="flip-card-back-v2">
                        <h1>Joo Bar</h1>
                        <p>A2</p>
                        <p>Propose de faire un stage de découverte de course à moto</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-lg-6">
                  <div class="flip-card-v2">
                    <div class="flip-card-inner-v2">
                      <div class="flip-card-front-v2">
                        <img src="./Image/laser.jpg" alt="Avatar" style="width:375px;height:200px;">
                        <div>
                          <p>Laser Game</p>
                        </div>
                      </div>
                      <div class="flip-card-back-v2">
                        <h1>Claire Ivoipa</h1>
                        <p>A2</p>
                        <p>Après midi laser game</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>