<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/article.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3">
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6">
    <center><h1 class="titrePage">Validation d'idée d'évènement</h1></center>
  </div>
</div>



<div class="body">
  
    <form action="/boîte_à_idée/validation:<?php echo e($events->id); ?>" method="POST" enctype="multipart/form-data">
      <div class="row">
      <?php echo e(csrf_field()); ?>


      <div class="col-lg-2 col-md-2 col-sm-2">
        <label for="Title"></label>
        <input  type="HIDDEN" class="valeur" name="ID" value="<?php echo e($events->id); ?>" >
        <?php if($errors->has('id')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('id')); ?></p>
        <?php endif; ?>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-2">
        <label for="Title"><b> Titre de l'évènement</b></label>
        <input type="text" placeholder="Entrez le titre de l'évènement" class="valeur" name="Title" value="<?php echo e($events->Title); ?>" >
        <?php if($errors->has('Title')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('Title')); ?></p>
        <?php endif; ?>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-2">
        <label for="Description"><b> Description</b></label>
        <input type="text" placeholder="Entrez une description de l'évènement" class="valeur" name="Description" value="<?php echo e($events->Description); ?>" >
        <?php if($errors->has('Description')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('Description')); ?></p>
        <?php endif; ?>
      </div>


      <div class="col-lg-2 col-md-2 col-sm-2">
        <label for="Date"><b> Date de l'évènement</b></label>
        <input type="date" placeholder="Entrez le titre de l'évènement" class="valeur" name="Date" value="<?php echo e($events->DateEvent); ?>" >
        <?php if($errors->has('Date')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('Date')); ?></p>
        <?php endif; ?>
      </div>


      <div class="col-lg-2 col-md-2 col-sm-2">
        <label for="Recurrent"><b> Évènement récurrent</b></label>
        <SELECT name="Recurrent" size="1" class="valeur" >
          <OPTION selected><?php echo e($events->Recurrence); ?></OPTION>
          <OPTION>Non récurrent</OPTION>
          <OPTION>Quotidien</OPTION>
          <OPTION>Journalier</OPTION>
          <OPTION>Hebdomadaire</OPTION>
        </SELECT>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-2">
        <span><input type="checkbox" id="MonthEvent" name="MonthEvent" value="check"> évènement du mois</span>
      </div>
      <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-5">
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2">
      <p><input type="submit" class="centre" value="Valider l'évènement"></p>
    </div>
    <div class="ccol-lg-5 col-md-5 col-sm-5">
    </div>
    </div>
    </div>
    </form>
  </div>
  
  




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>