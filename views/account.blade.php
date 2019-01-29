@extends('layout')


@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/block.css') }}"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="../js/number.js"></script>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
      <div class="centremc">
        <div class="card text-center">
          <div class="card-header">
            Mes Informations
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$user->Firstname}} {{$user->Lastname}}</h5>
            <p class="card-text">{{$user->Localisation}}</p>
            <p class="card-text">{{$user->Email}}</p>
            <button type="button" class="btn btn-primary">Télécharger toutes les photos</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
      <div class="centremc">
        <div class="accordion" id="acc1">
          <div class="card" id="headingOne">
            <h5 class="mb-0">
              <button  class="btn btn-link black" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Mon Panier
              </button>
              <button class="btn btn-link black" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Mes Inscriptions
              </button>
            </h5>
            <!-- PANIER -->
            <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#acc1">
              <div class="card-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="panel tryed">
                        <br>

                        <div class="row try">
                        @foreach ($articles as $article)
                          <div class="col-lg-3">
                            <img src="{{ url('storage/' . $article->PictureLink) }}" class="taille">
                          </div>
                          <div class="col-lg-1"></div>
                          <div class="col-lg-6">
                            <h6 class="drop">{{$article->Name}}</h6>
                            <small class="ct">{{$article->Description}}</small>
                            <p class="drop">{{$article->Price}}€</p>
                          </div>
                          <div class="col-lg-1">
                            <div class="dropdrop">
                              <a href="/compte/retirer_du_panier:{{$article->id}}" type="button" class="btn btn-default" aria-label="Left Align">
                                <i class="fas fa-trash-alt"></i>
                              </a>             
                            </div>
                          </div>
                          @endforeach
                        </div>
                        
                      </div>
                    </div> 
                    @if ($articles)
                    <div class="col-lg-4">
                      <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Votre panier</span>
                        <span class="badge badge-secondary badge-pill">{{sizeof($articles)}}</span>
                      </h4>
                      <ul class="list-group mb-3">

                        @foreach ($articles as $article)
                        <a class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0">{{$article->Name}}</h6>
                            @foreach ($ordered_articles as $ordered_article)   
                            @if ($ordered_article->id == $article->id)
                            <small class="text-muted">x{{$ordered_article->quantity}}</small>
                            @endif
                            @endforeach
                          </div>
                          <span class="text-muted">{{$article->Price}}€</span>
                        </a>
                        @endforeach     
                        <a class="list-group-item d-flex justify-content-between">
                          <span>Total (EU)</span>
                          <b>{{$total_price}} €</b>
                        </a>
                      </ul>
                    </div>
                    <a href="/compte/commande" type="button" class="btn btn-warning btn-lg btn-block">Passer commande</a> 
                    @else
                    <small class="text-muted">Votre panier est vide</small>
                    @endif
                  </div>
                </div>
              </div>
            </div>

            <!-- INSCRIPTIONS -->
            <div id="collapseTwo" class="collapse hide" aria-labelledby="headingOne" data-parent="#acc1">
              <div class="card-body"> 
                @if ($events)
                @foreach ($events as $event)
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-3 col-sm-2"><img src="{{ url('storage/' . $event->PictureLink) }}" class="size"/>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      {{$event->Title}}
                    </div>
                    <div class="col-lg-3 col-sm-3">
                      {{$event->DateEvent}}
                    </div>
                    <div class="col-lg-2 col-sm-3">
                      <a href="/évènements_futurs/désinscription:{{$event->id}}" class="btn btn-danger white">
                        Se désinscrire
                      </a>
                    </div>
                  </div>  
                </div>                 
                @endforeach
                @else
                <small class="text-muted">Vous êtes inscrit à aucun évènement.</small>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
    </div>
  </div> 
</div>
@endsection