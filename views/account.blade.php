@extends('layout')


@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/block.css') }}"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="../js/number.js"></script>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2"></div>
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
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <div class="centremc">
        <div class="accordion" id="acc1">
          <div class="card">
            <h5 class="mb-0">
              <button id="headingOne" class="btn btn-link black" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Mon Panier
              </button>
              <button id="headingTwo" class="btn btn-link black" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOTwo">
                Mes Inscriptions
              </button>
            </h5>
            <!-- PANIER -->
            <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" dsata-parent="#acc1">
              <div class="card-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="panel tryed">
                        <div>
                          @if ($articles)
                          @foreach ($articles as $article)
                          <br>
                          <div class="row try">
                            <div class="col-lg-3">
                              <img src="{{ url('storage/' . $article->PictureLink) }}" class="taille">
                            </div>
                            <div class="col-lg-5">
                              <h6 class="drop">{{$article->Name}}</h6>
                              <small class="ct">{{$article->Description}}</small>
                              <p class="drop">{{$article->Price}}€</p>
                            </div>
                            <div class="col-lg-1">
                              <div class="dropdrop">
                                <div class="input-group input-number-group">     
                                  @foreach ($ordered_articles as $ordered_article)                   
                                  <input class="input-number" type="number" value="{{$ordered_article->quantity}}" min="1">
                                  @endforeach
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2">
                              <div class="dropdrop">
                                <button type="button" class="btn btn-default" aria-label="Left Align">
                                  <i class="fas fa-trash-alt"></i>
                                </button>             
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Votre panier</span>
                        <span class="badge badge-secondary badge-pill">{{sizeof($articles)}}</span>
                      </h4>
                      <ul class="list-group mb-3">
                        <a class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0">{{$article->Name}}</h6>
                          </div>
                          <span class="text-muted">{{$article->Price}}€</span>
                        </a>
                        @endforeach
                        @endif
                        <a class="list-group-item d-flex justify-content-between">
                          <span>Total (EU)</span>
                          <b>{{$total_price}} €</b>
                        </a>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- INSCRIPTIONS -->
            <div id="collapseTwo" class="collapse hide" aria-labelledby="headingTwo" data-parent="#acc1">
              <div class="card-body">
                <div class="container-fluid">
                  @foreach ($events as $event)
                  <div class="row">
                    <div class="col-lg-3 col-sm-2"><img src="{{ url('storage/' . $event->PictureLink) }}" class="size"/></div>
                    <div class="col-lg-4 col-sm-4">{{$event->Title}}</div>
                    <div class="col-lg-3 col-sm-3">{{$event->DateEvent}}</div>
                    <div class="col-lg-2 col-sm-3"><p class="btn btn-danger white">Se désinscrire</p></div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>
@endsection