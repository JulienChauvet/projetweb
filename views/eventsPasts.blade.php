@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-1 col-md-1 col-sm-1">
  </div>
  <div class="col-lg-10 col-md-10 col-sm-10">
    <div class="jumbotron jumbotron-fluid jambon">
      <div class="container">
        <h1 class="display-4"><b>Les événements passés !</b></h1>
        <p class="lead"><b>Postez des photos et des commentaires, faites vous plaisirs ;)</b></p>
      </div>
    </div>
  </div>
  <div class="col-lg-1 col-md-1 col-sm-1">
  </div>
</div>
@foreach($events as $event)
<div class="container-fluid margTop">
  <div class="row">
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
    <div class="col-lg-10 col-md-12 col-sm-0">
      <div class="accordion" id="acc1">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" style="width:1500px; float:center;" data-target="#collapse{{$event->id}}" aria-expanded="true" aria-controls="collapse{{$event->id}}">
                {{$event->Title}}
              </button>
            </h5>
          </div>
          <div id="collapse{{$event->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#acc1">
            <div class="card-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="taille" src="{{$event->PictureLink}}" alt="event">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <p>{{$event->DateEvent}} - {{$event->Recurrence}}</p>
                    <p>{{$event->Description}}</p>
                    <a href="/informations_évènement_passé:{{$event->id}}"><p>voir plus >></p></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
  </div>
</div>
@endforeach

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection