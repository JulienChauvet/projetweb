<?php $__env->startSection('content'); ?>

<form action="/ajout_suggestion" method="POST">
    <?php echo e(csrf_field()); ?>


    <label for="Title"><b> Titre de l'évènement</b></label>
    <input type="text" placeholder="Entrez le titre de l'évènement" name="Title" value="<?php echo e(old('Title')); ?>" required>
    <?php if($errors->has('Title')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('Title')); ?></p>
    <?php endif; ?>

    <label for="Description"><b> Description</b></label>
    <input type="text" placeholder="Entrez une description de l'évènement" name="Description" value="<?php echo e(old('Description')); ?>" required>
    <?php if($errors->has('Description')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('Description')); ?></p>
    <?php endif; ?>

    <label for="Recurrent"><b> Évènement récurrent</b></label>
    <SELECT name="nom" size="1">
    <OPTION selected>Non récurrent
    <OPTION>Quotidien
    <OPTION>Journalier
    <OPTION>Hebdomadaire
    </SELECT>

    <label for="Image"><b> Image</b></label>
    <input type="file" name="Image" value="<?php echo e(old('Image')); ?>" accept="image/png, image/jpeg">
    <?php if($errors->has('Image')): ?>
        <p class="alert alert-danger"><?php echo e($errors->first('Image')); ?></p>
    <?php endif; ?>

    <p><input type="submit" value="Suggérer l'évènement"></p>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>