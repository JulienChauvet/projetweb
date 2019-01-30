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
        <h1 class="display-4"><b>Les commandes</b></h1>
        <p class="lead"><b>Les différentes commandes passés par les eXars</b></p>
      </div>
    </div>
  </div>
  <div class="col-lg-1 col-md-1 col-sm-1">
  </div>
</div>
@foreach($orders as $order)
<div class="container-fluid margTop">
  <div class="row">
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
    <div class="col-lg-10 col-md-12 col-sm-0">
      <div class="accordion" id="acc1">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              @foreach ($users as $user)
              @if ($user->id == $order->id_Users )
              <button class="btn btn-link" type="button" data-toggle="collapse" style="width:1500px; float:center;" data-target="#collapse{{$order->id}}" aria-expanded="true" aria-controls="collapse{{$order->id}}">
                {{ $user->Firstname }} {{ $user->Lastname }}
              </button>
              @break
              @endif
              @endforeach
            </h5>
          </div>
          <div id="collapse{{$order->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#acc1">
            <div class="card-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><b>Nom des articles</b></p>
                    @foreach ($articles as $articleArray)
                    @foreach($articleArray as $article)
                    @if ($article->id_Orders == $order->id)
                    <p>{{ $article->Name }}</p>
                    @endif
                    @endforeach
                    @endforeach
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><b>Quantité</b></p>
                    @foreach ($articles as $articleArray)
                    @foreach($articleArray as $article)
                    @if ($article->id_Orders == $order->id)
                    <p>{{ $article->quantity }}</p>
                    @endif
                    @endforeach
                    @endforeach
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><b>Prix</b></p>
                    @foreach ($articles as $articleArray)
                    @foreach($articleArray as $article)
                    @if ($article->id_Orders == $order->id)
                    <p>{{ $article->Price }} €</p>
                    @endif
                    @endforeach
                    @endforeach
                  </div>
                </div>
                <br>
                <br>
                <br>
                <form action="/boutique/commande:{{$order->id}}" method="POST">
                  {{ csrf_field() }}
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2">
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><b>Prix total: {{ $total_price[$loop->iteration-1] }} €</b></p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><input type="date" class="centre" name="dateMeeting"></p>
                    @if($errors->has('dateMeeting'))
                    <p class="alert alert-danger">{{ $errors->first('dateMeeting') }}</p>
                    @endif
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><input type="text" class="centre" name="localisation" placeholder="Le lieu de rendez-vous"></p>
                    @if($errors->has('localisation'))
                    <p class="alert alert-danger">{{ $errors->first('localisation') }}</p>
                    @endif
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><input type="submit" class="btn btn-info" value="Proposer"></p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <a href="/boutique/commande:{{$order->id}}" type="submit" class="btn btn-success">Valider la commande</a>
                  </div>
                </div>
                </form>
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