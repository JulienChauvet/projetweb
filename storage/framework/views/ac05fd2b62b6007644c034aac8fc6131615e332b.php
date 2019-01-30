<?php $__env->startSection('content'); ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<div class='backgroun'>
    <div class="container-fluid margTop">
        <div class="row">
            <div class="col-lg-1 col-md-0 col-sm-0">
                <img id="bigmyImg1" class="img-responsive" src="../Image/eventBowl.png" alt="bowl" style="width:90%;max-width:10px; max-height: 10px;">
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
                  <div class="item active">
                    <img src="../Image/bowling.png" alt="Bowling" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Evènement Football</h5>
                        <p>On se retrouve pour un tournois de football le 15 janvier 2020</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../Image/billard.png" alt="Billard" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Evènement LAN</h5>
                        <p>On se retrouve pour notre évenement ayant la plus grosse renommé. Notre évenement E-sport avec plusieurs tournois organisé</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../Image/karting.png" alt="Karting" style="width:100%;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Evènement touchage de couille</h5>
                        <p>Un évenement ou il faut pas trop avoir envie de faire quelque chose pour venir</p>
                    </div>
                </div>
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
<div class="col-6 col-lg-1 col-md-0 col-sm-0">
    <img id="bigmyImg2" class="reduct" src="../Image/eventBill.png" alt="bill" style="width:90%;max-width:10px; max-height: 10px;">
</div>
</div>

<!-- fin de la row du carousel -->




<div class="row">
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
    <div class="col-lg-5 col-md-8 col-sm-12">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Bowling</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Evenement BOWLING à lOrangerie !</a>
            </h3>
            <div class="mb-1 text-muted">le 22 Mars 2019 à 14h00 !</div>
            <div class ="row">
                <div class="col-lg-4 col-md-4 col-sm-4">

                   <!-- Trigger the Modal -->
                   <img id="myImg" class="img-responsive" src="../Image/Pbowl.jpg" alt="Texte description de l'image" style="width:90%;max-width:200px; max-height: 250px;">

                   <!-- The Modal -->
                   <div id="myModal" class="modal">

                      <!-- The Close Button -->
                      <span class="close">&times;</span>

                      <!-- Modal Content (The Image) -->
                      <img class="modal-content" id="img01">

                      <!-- Modal Caption (Image Text) -->
                      <div id="caption"></div>
                  </div> 





              </div>
              <div class="col-lg-8 col-md-8 col-sm-8">

                <p class="card-text mb-auto">24 Pistes homologuées attendent petits et grands. Ambiance détendue en journée et festive le soir, tout est prévu pour que vous passiez un moment inoubliable en notre compagnie. Une personne majeur doit accompagner obligatoirement les mineurs.</p>
                <br/>
                <a href="#" id="myTxt">Lire plus >></a>

                <br>
                <br>
                <br>
                <br>

                <div class="row input-group input-number-group">
                  <div class="col-lg-8 col-md-8 col-sm-8">
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="input-group-button">
                      <button id="voted" type="button" class="btn btn-info input-number-increment">Vote</button>
                  </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2">
                  <input type="text" class="input-number" value="0" min="0" max="1000" disabled>
              </div>


          </div>
      </div>

  </div>
</div>
</div>
</div>




<div class="col-lg-5 col-md-6 col-sm-6">
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">Billard</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Evenement Billard à Shiltigheim !</a>
        </h3>
        <div class="mb-1 text-muted">30 Février</div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img id="secImg" src="../Image/Pbill.png" class="img-responsive" alt="Billard" style="width:90%;max-width:200px; max-height: 250px;">
            </div>


            <div id="myModal2" class="modal2">

              <!-- The Close Button -->
              <span class="close">&times;</span>

              <!-- Modal Content (The Image) -->
              <img class="modal-content" id="img02">

              <!-- Modal Caption (Image Text) -->
              <div id="caption2"></div>
          </div> 




          <div class="col-lg-8 col-md-8 col-sm-8">
              <p class="card-text mb-auto">Venez découvrir la passion du billard sur une de nos nombreuses tables, que ce soit du billard français ou du billard à poches, il y en a pour tous les goûts! Nous vous accueillons lundi, mercredi et jeudi de 14h à 22h45 , vendredi et samedi de 14h à 23h45. Fermeture les mardis et les dimances (sauf jours de compétition) </p>
              <br/>
              <a href="#" id="myTxt2">Lire plus >></a>

              <br>
              <br>
              <br>

              <div class="row input-group input-number-group">
                  <div class="col-lg-8 col-md-8 col-sm-8">
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="input-group-button">
                      <button id="voted" type="button" class="btn btn-info input-number-increment">Vote</button>
                  </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2">
                  <input type="text" class="input-number" value="0" min="0" max="1000" disabled>
              </div>


          </div>

      </div>
  </div>
</div>
</div>
</div>
<div class="col-6 col-lg-1 col-md-0 col-sm-0">
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>