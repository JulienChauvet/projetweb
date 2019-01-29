@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
@endsection

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
            @foreach ($carrousel_events as $carrousel_event)
            @if ($loop->iteration <= 1)
            <div class="item active">
              <img src="{{ url('storage/' . $carrousel_event->PictureLink) }}" alt="Bowling" style="width:100%;height:480px">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{$carrousel_event->Title}}</h5>
                <p>{{$carrousel_event->DateEvent}}</p>
              </div>
            </div>
            @else
            <div class="item">
              <img src="{{ url('storage/' . $carrousel_event->PictureLink) }}" alt="Billard" style="width:100%;height:480px">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{$carrousel_event->Title}}</h5>
                <p>{{$carrousel_event->DateEvent}}</p>
              </div>
            </div>
            @endif
            @endforeach
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
      <u><input type="submit" name="com_1" value="supprimer" class="nop">
      <input type="submit" name="com_2" value="signaler" class="nop"></u>
      <div class="card flex-md-row mb-4 shadow-sm h-md-250 hauteur">
        <div class="card-body d-flex flex-column align-items-start">
          <h3 class="mb-0">
            <a class="text-dark" href="#">{{$event->Title}}</a>
          </h3>
          <div class="mb-1 text-muted">{{$event->DateEvent}}</div>
          <div class ="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
             <!-- Trigger the Modal -->
             <img class="img-responsive" src="{{ url('storage/' . $event->PictureLink) }}" alt="{{$event->Title}}" style="width:90%;max-width:200px; max-height: 250px;">
             <!-- The Modal -->
             <div id="myModal" class="modal">
             </div> 
           </div>
           <div class="col-lg-8 col-md-8 col-sm-8">
            <p class="card-text mb-auto">{{$event->Description}}</p>
            <br/>
            <a href="/évènements_futurs/évènement:{{$event->id}}">Lire plus >></a>
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
  <div class="col-lg-5 col-md-8 col-sm-12">
    <u><input type="submit" name="com_1" value="supprimer" class="nop">
      <input type="submit" name="com_2" value="signaler" class="nop"></u>
    <div class="card flex-md-row mb-4 shadow-sm h-md-250 hauteur">
      <div class="card-body d-flex flex-column align-items-start">
        <h3 class="mb-0">
          <a class="text-dark" href="#">{{$event->Title}}</a>
        </h3>
        <div class="mb-1 text-muted">{{$event->DateEvent}}</div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <img src="{{ url('storage/' . $event->PictureLink) }}" class="img-responsive" alt="{{$event->Title}}" style="width:90%;max-width:200px; max-height: 250px;">
          </div>
          <div id="myModal2" class="modal2">
          </div> 
          <div class="col-lg-8 col-md-8 col-sm-8">
            <p class="card-text mb-auto">{{$event->Description}}</p>
            <br/>
            <a href="/évènements_futurs/évènement:{{$event->id}}">Lire plus >></a>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="col-lg-1 col-md-0 col-sm-0">
  </div>
</div>
@endif
@endforeach

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</div>
@endsection