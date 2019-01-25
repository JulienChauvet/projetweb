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
                                              
                               <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#acc1">
                                <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="panel tryed">
                                                <div>
                                                <br>
                                                <div class="container ">
                                                    <div class="row try">
                                                        <div class="col-lg-3">
                                                            <img src="../Image/sweat.jpg" class="taille">
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <h6 class="drop">Pull d'hiver avec le logo de l'EXIA fourrée.</h6>
                                                            <small class="ct">Taille XL couleur mauve</small>
                                                            <p class="drop">20€</p>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <div class="dropdrop">
                                                            <div class="input-group input-number-group">                           
                                                                <input class="input-number" type="number" value="1" min="0" max="10">
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <div class="dropdrop">
                                                                <a>20€</a>
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
                                                    <br>
                                                    <div class="row try">
                                                        <div class="col-lg-3">
                                                            <img src="../Image/mugbulle.jpg" class="taille">
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <h6 class="drop">Mug personnalisé avec votre dessin</h6>
                                                            <small class="ct">Dessin choisit : BUBULLE</small>
                                                            <p class="drop">8€</p>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <div class="dropdrop">
                                                            <div class="input-group input-number-group">                           
                                                                <input class="input-number" type="number" value="1" min="0" max="1000">
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <div class="dropdrop">
                                                            <a>8€</a>
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

                                                <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="text-muted">Votre panier</span>
                                                    <span class="badge badge-secondary badge-pill">3</span>
                                                </h4>
                                                <ul class="list-group mb-3">
                                                    <a class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <div>
                                                        <h6 class="my-0">Pull d'hiver</h6>
                                                        <small class="text-muted">XL/mauve</small>
                                                    </div>
                                                    <span class="text-muted">20€</span>
                                                    </a>
                                                    <a class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <div>
                                                        <h6 class="my-0">Mug personnalisé</h6>
                                                        <small class="text-muted">Name : BUBULLE</small>
                                                    </div>
                                                    <span class="text-muted">8€</span>
                                                    </a>
                                                    <a class="list-group-item d-flex justify-content-between lh-condensed">
                                                    <div>
                                                        <h6 class="my-0">Support de téléphone</h6>
                                                        <small class="text-muted">Bleu/Blanc</small>
                                                    </div>
                                                    <span class="text-muted">5€</span>
                                                    </a>

                                                    <a class="list-group-item d-flex justify-content-between">
                                                    <span>Total (EU)</span>
                                                    <strong>33€</strong>
                                                    </a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse hide" aria-labelledby="headingTwo" data-parent="#acc1">
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            
                                            <div class="col-lg-3 col-sm-2"><img src="../Image/foot.jpg" class="size"/></div>
                                            <div class="col-lg-4 col-sm-4">Titre de l'évènement</div>
                                            <div class="col-lg-3 col-sm-3">Date de l'évènement</div>
                                            <div class="col-lg-2 col-sm-3"><p class="btn btn-danger white">Se désinscrire</p></div>
                                         
                                        </div>
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