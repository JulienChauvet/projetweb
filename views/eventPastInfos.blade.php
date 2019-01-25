@extends('layout')


@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
    </div>

    <div class="col-lg-2 col-md-2 col-sm-2">
      <img src="{{$event->PictureLink}}" alt="img principal event" id="mainImg">
    </div>
    <div class="col-lg-4 text-white p-md-10 big">
      <h1 class="display-4 font-italic">{{$event->Title}}</h1>
      <h7>{{$event->DateEvent}}</h7>
      <p class="lead my-3">{{$event->Description}}</p>
    </div>
    <div class=col-lg-4>
    </div>
  </div>
  @foreach($pictures as $picture)
  <hr>
  <div class="row">
    <div class="col-lg-11">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <img src="{{$picture->Link}}" style="width: 100%" alt="photo évènements">
      </div>

      <div class="col-lg-1 col-md-1 col-sm-1">
        <a class="btn like">
          <i class="far fa-thumbs-up bleu"></i>
        </a>
      </div>

      <div class="col-lg-5 col-md-5 col-sm-5">
        <div class="scrollbar">
          <div class="col-lg-12 col-md-12 col-sm-12">
           @foreach($comments as $commentArray)
           @foreach($commentArray as $comment)
           @foreach($authors as $author)
           @if ($comment->id_Pictures == $picture->id)
           <div class="commentaire">

            <h5 class="blanc" alt="nom utilisateur commentaire">{{$author[0]->Firstname}} {{$author[0]->Lastname}}:</h5>

            <p class="blanc">{{$comment->Content}}</p>
          </div>
          @endif
          @endforeach
          @endforeach
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
<hr>
@endforeach

</div>
<script type="text/javascript" src="../js/script.js"></script>
@endsection