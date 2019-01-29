<!-- child of the page : layout.blade.php -->
@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
@endsection

<!-- body from layout -->
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-4 col-md-2 col-sm-2">
      <!-- image from the database, which is link with the event -->
      <img src="{{ url('storage/' . $event->PictureLink) }}" alt="img principal event" id="mainImg" class="taille">
    </div>
    <div class="col-lg-6 text-white p-md-10 big">
      <!-- Title of the Event from database ($event is make in the controller) -->
      <h1 class="display-4 font-italic">{{$event->Title}}</h1>
      <!-- Date of the event from database (same for the date) -->
      <p class="lead my-3">{{$event->DateEvent}}</p>
      <!-- Description take from the database (same here) -->
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
    <!-- if he is not connected -->
    @if ($registered == false)
    <a class="btn btn-success btn-lg btn-block" href="/évènements_futurs/inscription:{{$event->id}}">S'INSCRIRE</a>
    @endif
  </div>
  <div class="col-lg-1">
  </div>
</div>
<!-- if he is not connected as a studient -->
@if($role != 'Etudiant')
<div class="row">
  <div class="col-lg-1">
  </div>
  <div class="col-lg-10">
    <div class="col-lg-4">
      <!-- this button will make us download all the pictures in csv or pdf -->
      <a href="#"><button type="button" class="btn tomato"><b>Télécharger</b></button></a>
    </div>
    <div class="col-lg-8">
      <SELECT name="nom" size="1" class="csv">
        <OPTION>Télécharger sous formats CSV
          <OPTION>Télécharger sous formats PDF
          </SELECT>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-1">
      </div>
      <div class="col-lg-5">
        <u><input type="submit" name="com_1" value="supprimer" class="nop">
          <input type="submit" name="com_2" value="signaler" class="nop"></u>
        </div>
        <div class="col-lg-1 screen">
        </div>
      </div>

      @endif
      @endsection