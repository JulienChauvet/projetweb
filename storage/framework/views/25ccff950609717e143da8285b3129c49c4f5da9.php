<?php $__env->startSection('link'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
	<div class="container-fluid">
		<div class="row space">
			<div class="col-lg-1 col-md-1 col-sm-0">
			</div>
			<div class="col-lg-10 col-md-10 col-sm-12">
				<div class="image-container">
					<center><h1 class="blancChaud">BOITE A IDEE</h1></center>
				</div> 
			</div>
			<div class="col-lg-1 col-md-1 col-sm-0">
			</div>
		</div>
		<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if($loop->iteration % 2 == 1): ?>
		<div class="row space">
			<div class="col-lg-2 col-md-2 col-sm-0">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 center">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="<?php echo e(url('storage/' . $event->PictureLink)); ?>" alt="Avatar" class="tailleimg">
						</div>
						<div class="flip-card-back">

							<h1><?php echo e($event->Title); ?></h1>
							<label for="Date"><b>Date : <?php echo e($event->DateEvent); ?></b></label>
							<p><?php echo e($event->Description); ?></p>
							<div class="input-group input-number-group">
								<div class="input-group-button">
									<button id="voted" type="button" class="btn color input-number-increment dark voted">Vote</button>
								</div>
								<input type="text" class="input-number radius" value="0" min="0" max="1000" disabled>
							</div>
							<?php if($role == 'BDE'): ?>
							<div class="input-group-button">
								<a href="/boîte_à_idée/validation:<?php echo e($event->id); ?>" id="validation" type="button" class="btn color input-number-increment dark">Validation de l'idée</a>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php if($role == "BDE"): ?>
				<u><input type="submit" name="com_1" value="supprimer" class="nop">
					<?php endif; ?>
					<?php if($role == "Cesi"): ?>
					<input type="submit" name="com_2" value="signaler" class="nop"></u> 
					<?php endif; ?>
				</div>
				<?php endif; ?>
				<?php if($loop->iteration % 2 == 0): ?>
				<div class="col-lg-4 col-md-4 col-sm-6 center">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="<?php echo e(url('storage/' . $event->PictureLink)); ?>" alt="Avatar" class="tailleimg">
							</div>
							<div class="flip-card-back">
								<h1><?php echo e($event->Title); ?></h1>
								<label for="Date"><b>Date : <?php echo e($event->DateEvent); ?></b></label>
								<p><?php echo e($event->Description); ?></p>
								<div class="input-group input-number-group">
									<div class="input-group-button">
										<button id="voted" type="button" class="btn color input-number-increment dark voted">Vote</button>
									</div>
									<input type="text" class="input-number radius" value="0" min="0" max="1000" disabled>
									<?php if($role == 'BDE'): ?>
									<div class="input-group-button">
										<a href="/boîte_à_idée/validation:<?php echo e($event->id); ?>" id="validation" type="button" class="btn color input-number-increment dark">Validation de l'idée</a>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php if($role == "BDE"): ?>
						<u><input type="submit" name="com_1" value="supprimer" class="nop">
							<?php endif; ?>
							<?php if($role == "Cesi"): ?>
							<input type="submit" name="com_2" value="signaler" class="nop"></u> 
							<?php endif; ?>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-0">
						</div>
						
					</div>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div class=container-fluid>	
					<div class="row space">
						<div class="col-lg-5">
						</div>
						<div class="col-lg-2 center">
							<?php if($role == 'BDE'): ?>
							<div class="input-group-button">
								<a id="voted" href="/boîte_à_idée/ajout_suggestion" class="btn color input-number-increment blanc noir">Proposer un évènement</a>
							</div>
							<?php endif; ?>
						</div>
						<div class="col-lg-5">
						</div>
					</div>
				</div>
			</div>
			<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>