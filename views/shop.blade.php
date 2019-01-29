@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('../css/shop.css') }}"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
@endsection

@section('content')
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
  </div>
  @if($role == 'BDE')
  <div class="col-lg-1 col-md-1 col-sm-1">
    <div class="push">
      <a href="/boutique/commandes"><button type="button" class="btn green"><b>Commandes</b></button></a>
    </div>
  </div>
  <div class="col-lg-1 col-md-1 col-sm-1">
    <div class="push">
      <a href="/boutique/nouvel_article"><button type="button" class="btn green"><b>Ajouter un article</b></button></a>
    </div>
  </div>
  @endif
  <div class="col-lg-2 col-md-2 col-sm-2">
    <div class="topnav">
      <input type="text" class="search" id="myInput" placeholder="Search.." >
    </div>
  </div> 
</div>

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
@foreach($articles as $article)
<div class="backgroun">
  <div class="row">
    <div class="col-lg-6">
      <hr size="10">
      <h1 class="titre">{{$article->Name}}</h1><br>
      <h1 class="subtitre">{{$article->Price}} €</h1>
      <p class="bigger">{{$article->Description}}</p>
    </div>
    <div class="col-lg-6">
      <div class="col-lg-6">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        @if($role == 'BDE')
        <a type="button" class="btn rouge"><i class="fas fa-trash-alt"></i></a>
        @endif
        <br>
        <br>
        <form action="/boutique/ajout_au_panier:{{$article->id}}" method="GET">
         <button type="submit" class="btn orange"><b>ADD TO CART >></b></button>
         <p>Qté : </p>
         <input name="quantity" class="input-number test" type="number" value="1" min="1" max="1000">
       </form>
     </div>
     <div class="col-lg-6">
      <img src="{{ url('storage/' . $article->PictureLink) }}" class="image-link" alt="image" id="grande">
    </div>
  </div>
</div>
</div>
</p>
@endforeach

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/shop.js"></script>
@endsection