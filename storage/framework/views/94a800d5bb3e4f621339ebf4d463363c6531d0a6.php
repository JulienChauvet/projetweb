<?php $__env->startSection('content'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('../css/style.css')); ?>"/>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6 text-white p-md-10 big">
                          <h1 class="display-4 font-italic">L'hiver vient</h1>
                          <p class="lead my-3">Nouveaux sweats d'hiver pour bien avoir chaud pour l'arrivé du grand froid</p>
                          <p class="lead mb-0">Durée Limitée</p>
                    </div>
        <div class=col-lg-3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <h1 class="middle blanc">DESCRIPTION DE L'EVENEMENT</h1>
            <p class="justy blanc">Sed ut tum ad senem senex de senectute, sic hoc libro ad amicum amicissimus scripsi de amicitia. Tum est Cato locutus, quo erat nemo fere senior temporibus illis, nemo prudentior; nunc Laelius et sapiens (sic enim est habitus) et amicitiae gloria excellens de amicitia loquetur. Tu velim a me animum parumper avertas, Laelium loqui ipsum putes. C. Fannius et Q. Mucius ad socerum veniunt post mortem Africani; ab his sermo oritur, respondet Laelius, cuius tota disputatio est de amicitia, quam legens te ipse cognosces.</p>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <a class="btn btn-success btn-lg btn-block">S'INSCRIRE</a>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>