@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4 col-md-2 col-sm-2">
            <img src="{{ url('storage/' . $event->PictureLink) }}" alt="img principal event" id="mainImg" class="taille">
        </div>
        <div class="col-lg-6 text-white p-md-10 big">
          <h1 class="display-4 font-italic">{{$event->Title}}</h1>
          <p class="lead my-3">{{$event->DateEvent}}</p>
          <p class="justy blanc">{{$event->Description}}</p>
      </div>
      <div class=col-lg-3>
      </div>
  </div>
</div>
<div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">
        <a class="btn btn-success btn-lg btn-block" href="/">S'INSCRIRE</a>
    </div>
    <div class="col-lg-1">
    </div>
</div>
</div>
@endsection