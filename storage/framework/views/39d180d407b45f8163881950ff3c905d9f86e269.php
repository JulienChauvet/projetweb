<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/article.css')); ?>"/>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3">
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6">
    <center><h1 class="titrePage">Vous souhaitez rajouter un article?</h1>
      <h2 class="titrePage">N'attendez plus :</h2></center>
    </div>
  </div>
  <div class="body">
    <div class="row">
      <form class="section upmarg" action="/boutique/nouvel_article" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="field col-lg-2 col-md-2 col-sm-2">
          <br>
          <center><label for="Article">Nom de l'article :</label><center>
            <div class="control">
              <input type="text" placeholder="Entrez Nom de l'article" class="valeur" name="Article" value="<?php echo e(old('Article')); ?>" required>
            </div>
            <?php if($errors->has('Article')): ?>
            <p class="alert alert-danger"><?php echo e($errors->first('Article')); ?></p>
            <?php endif; ?>
          </br>
        </div>
        <div class="field col-lg-2 col-md-2 col-sm-2">
          <br>
          <center><label for="Description">Description :</label></center>
          <div class="control">
            <input type="text" placeholder="Entrez une description" class="valeur" name="Description" value="<?php echo e(old('Description')); ?>" required>
          </div>
          <?php if($errors->has('Description')): ?>
          <p class="alert alert-danger"><?php echo e($errors->first('Description')); ?></p>
          <?php endif; ?>
        </br>
      </div>
      <div class="field col-lg-2 col-md-2 col-sm-2">
        <br>
        <center><label for="Prix">Prix :</label></center>
        <div class="control">
          <input type="text" placeholder="Entrez  Nom de l'article" class="valeur" name="Prix" value="<?php echo e(old('Prix')); ?>" required>
        </div>
        <?php if($errors->has('Prix')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('Prix')); ?></p>
        <?php endif; ?>
      </br>
    </div>
    <div class="field col-lg-2 col-md-2 col-sm-2">
      <br>
      <center><label for="Catégorie">Catégorie : </label></center>
      <div class="control">
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <span><input type="checkbox" name="Category[]" value="<?php echo e($category->Name); ?>"/> <?php echo e($category->Name); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php if($errors->has('Catégorie')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('Catégorie')); ?></p>
        <?php endif; ?>
      </br>
    </div>
    <div class="field col-lg-2 col-md-2 col-sm-2">
      <br>
      <center><label for="Image">Image :</label></center>
      <div class="control">
        <input type="file" name="Image" value="<?php echo e(old('Image')); ?>" accept="image/png, image/jpeg">
      </div>
      <?php if($errors->has('Image')): ?>
      <p class="alert alert-danger"><?php echo e($errors->first('Image')); ?></p>
      <?php endif; ?>
    </br>
  </div>
  <div class="field col-lg-2 col-md-2 col-sm-2">
    <div class="control">
      <button class="button is-link bouton" type="submit">Ajouter</button>
    </div>
  </div>
</form>
</div>
</div>

<div class="row">
<a href="/boutique/nouvelle_catégorie"><button class="button is-link top" type="submit">Ajouter une catégorie</button></a>
  </div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>