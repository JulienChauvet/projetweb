@extends('layout')

@section('content')
<div class='backgroun'>
  <div class="container-fluid margTop">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-1">
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
  </div>
  <!-- fin de la row du carousel -->
@foreach($events as $event)
@if ($loop->iteration % 2 == 1)
  <div class="row">
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
    <div class="col-lg-5 col-md-8 col-sm-12">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <h3 class="mb-0">
            <a class="text-dark" href="#">{{$event->Title}}</a>
          </h3>
          <div class="mb-1 text-muted">{{$event->DateEvent}}</div>
          <div class ="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
             <!-- Trigger the Modal -->
             <img class="img-responsive" src="{{$event->PictureLink}}" alt="{{$event->Title}}" style="width:90%;max-width:200px; max-height: 250px;">
             <!-- The Modal -->
             <div id="myModal" class="modal">
             </div> 
           </div>
           <div class="col-lg-8 col-md-8 col-sm-8">
            <p class="card-text mb-auto">{{$event->Description}}</p>
            <br/>
            <a href="../informations_évènement_à_venir:{{$event->id}}">Lire plus >></a>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
  @if ($loop->iteration % 2 == 0)
  <div class="col-lg-5 col-md-6 col-sm-6">
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <h3 class="mb-0">
          <a class="text-dark" href="#">{{$event->Title}}</a>
        </h3>
        <div class="mb-1 text-muted">{{$event->DateEvent}}</div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <img src="{{$event->PictureLink}}" class="img-responsive" alt="{{$event->Title}}" style="width:90%;max-width:200px; max-height: 250px;">
          </div>
          <div id="myModal2" class="modal2">
          </div> 
          <div class="col-lg-8 col-md-8 col-sm-8">
            <p class="card-text mb-auto">{{$event->Description}}</p>
            <br/>
            <a href="../informations_évènement_à_venir:{{$event->id}}">Lire plus >></a>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-6 col-lg-1 col-md-0 col-sm-0">
  </div>
</div>
@endif
@endforeach

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</div>
@endsection