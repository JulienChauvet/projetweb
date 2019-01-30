<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/shop.css')); ?>"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
  </div>
  <?php if($role == 'BDE'): ?>
  <div class="col-lg-1 col-md-1 col-sm-1">
    <div class="push">
      <a href="/boutique/commandes"><button type="button" class="btn btn-info"><b>Commandes</b></button></a>
    </div>
  </div>
  <?php endif; ?>
  <div class="col-lg-2 col-md-2 col-sm-2">
    <div class="topnav">
      <input type="text" class="search" id="myInput" placeholder="Search.." >
    </div>
  </div> 
</div>
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
  </div>
  <?php if($role == 'BDE'): ?>
  <div class="col-lg-1 col-md-1 col-sm-1">
    <div class="push">
      <a href="/boutique/nouvel_article"><button type="button" class="btn btn-info"><b>Ajouter article</b></button></a>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="row">
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/boutique">Toutes les catégories</a>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/boutique/categorie:<?php echo e($categorie->id); ?>"><?php echo e($categorie->Name); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <span id="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Boutique</span>
</div>
<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="backgroun">
  <div class="row">
    <div class="col-lg-6">
      <hr size="10">
      <h1 class="titre"><?php echo e($article->Name); ?></h1><br>
      <h1 class="subtitre"><?php echo e($article->Price); ?> €</h1>
      <p class="bigger"><?php echo e($article->Description); ?></p>
    </div>
    <div class="col-lg-6">
      <div class="col-lg-4">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php if($role == 'BDE'): ?>
        <a href="#" class="btn rouge"><i class="fas fa-trash-alt"></i></a>
        <?php endif; ?>
        <br>
        <br>
        <form action="/boutique/ajout_au_panier:<?php echo e($article->id); ?>" method="GET">
         <button type="submit" class="btn orange"><b>Ajouter au panier >></b></button>
         <p>Qté : </p>
         <input name="quantity" class="input-number test" type="number" value="1" min="1" max="1000">
       </form>
     </div>
      <div class="col-lg-8"> 
        <img src="<?php echo e(url('storage/' . $article->PictureLink)); ?>" class="image-link grande center" alt="image">
      </div>
  </div>
</div>
</div>
</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/shop.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>