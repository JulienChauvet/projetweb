@extends('layout')
@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('../css/article.css') }}"/>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2">
      <img src="../Image/boutique2.png" alt="img principal event" id="mainImg">
    </div>
    <div class="col-lg-4 text-white p-md-10 big">
      <h1 class="display-4 font-italic">{{$event->Title}}</h1>
      <h7>{{$event->DateEvent}}</h7>
      <p class="lead my-3">{{$event->Description}}</p>
    </div>
    <div class=col-lg-4>
    </div>
  </div>
  @for ($i=0; $i < sizeof($pictures); $i++)
  <hr>
  <div class="row">
    <div class="col-lg-11">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <img src="{{ url('storage/' . $pictures[$i]->Link) }}" style="width: 100%" alt="photo évènements">
      </div>
      <div class="col-lg-1 col-md-1 col-sm-1">
        <div class="input-group input-number-group">
          <div class="input-group-button">
            <a class="btn like">
              <i  id="voted" class="far fa-thumbs-up bleu input-number-increment"></i>
            </a>
          </div>
          <input type="text" class="input-number" value="0" min="0" max="1000" disabled>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5">
        <div class="scrollbar">
          @foreach($comments[$i] as $comment)
          <div class="commentaire">
            @for ($n=0; $n < sizeof($authors); $n++)
            @if ($comment->id_users == $authors[$n]->id)
            <h5 class="blanc" alt="nom utilisateur commentaire">{{$authors[$n]->Firstname}} {{$authors[$n]->Lastname}}:</h5>
            @endif
            @endfor
            <p class="blanc">{{$comment->Content}}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1">
    </div>
  </div>
  <div class="col-lg-1">
  </div>
</div>
<div class="row">
  <div class="col-lg-7 col-md-7 col-sm-7">
  </div>  
  <div class="col-lg-3 col-md-3 col-sm-3">
    <input type="text" name="" id="cible" placeholder="Entrez votre commentaire..." class="com">
  </div>
  <div class="col-lg-1 col-md-1 col-sm-1">
    <input type="submit" name="" value="Envoyer" class="send">
  </div>
</div>
<hr>
@endfor

<script type="text/javascript" src="../js/script.js"></script>
@endsection