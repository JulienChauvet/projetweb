@extends('layout')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/shop.css') }}"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<div class="row">
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/boutique">Toutes les catégories</a>
    @foreach($categories as $categorie)
    <a href="/boutique/categorie:{{$categorie->id}}">{{$categorie->Name}}</a>
    @endforeach
  </div>
  <span id="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Boutique</span>
</div>
<div><a href="/nouvel_article">Ajouter un article</a></div>
@foreach($articles as $article)
<div class="row">
  <div class="col-lg-6">
    <hr size="10">
    <div class="col-lg-3">
      <img src="../Image/boutique2.png" alt="exia" class="circle" id="tooLarge">
    </div>
    <h1 class="titre">{{$article->Name}}</h1><br>
    <h1 class="subtitre">{{$article->Price}} €</h1>
    <p>{{$article->Description}}</p>
  </div>
  <div class="col-lg-6">
    <div class="col-lg-6">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <button type="button" class="btn orange"><b>ADD TO CART >><b></button>
        <p>Qté : <p>
         <input class="input-number test" type="number" value="1" min="0" max="1000">
       </div>
       <div class="col-lg-6">
        <img src="{{ url('storage/' . $article->PictureLink) }}" class="image-link" alt="image" id="grande">
      </div>
    </div>
  </div>
</div>
@endforeach

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
@endsection