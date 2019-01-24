@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
@endsection


@section('content')
<div class="space">
  <div class="container-fluid ">
    <div class="row space">
      <div class="col-lg-3">
        <div class="ptitbloc">
          <div class="titrebloc">
            <h3>Description BDE</h3>
          </div>
          <div class="descriptionbloc blanc">
            <p>Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.</p>
            <p>Iam virtutem ex consuetudine vitae sermonisque nostri interpretemur nec eam, ut quidam docti, verborum magnificentia metiamur virosque bonos eos, qui habentur, numeremus, Paulos, Catones, Galos, Scipiones, Philos; his communis vita contenta est; eos autem omittamus, qui omnino nusquam reperiuntur.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="ptitbloc">
          <div class="titrebloc">
            <h3>CAROUSSELLE AVEC LES EVENEMENTS PASSES ET A VENIR</h3>
          </div>
          <div class="descriptionbloc">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../Image/foot.jpg" alt="First slide" style="height:480px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../Image/laser.jpg" alt="Second slide" style="height:480px;">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../Image/marche.jpg" alt="Third slide" style="height:480px;">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row space">
      <div class="col-6 col-lg-6">
        <div class="ptitbloc">
          <div class="titrebloc">
            <h3>Actualité</h3>
          </div>
          <div class="descriptionbloc2">
            <div class="container-fluid">
              <div class="row bb">
                <div class="col-6 col-lg-4">
                  <div class="card cardfx">
                    <img class="card-img-top taillefx" src="../Image/foot.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-4">
                  <div class="card cardfx">
                    <img class="card-img-top taillefx" src="../Image/sweat.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-4">
                  <div class="card cardfx">
                    <img class="card-img-top taillefx" src="../Image/mugbulle.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row bb">
                <div class="col-6 col-lg-4">
                  <div class="card cardfx">
                    <img class="card-img-top taillefx" src="../Image/laser.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-4">
                  <div class="card cardfx">
                    <img class="card-img-top taillefx" src="../Image/marche.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-4">
                  <div class="card cardfx">
                    <img class="card-img-top taillefx" src="../Image/imagetest2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="ptitbloc">
          <div class="titrebloc">
            <h3>Nos meilleurs ventes</h3>
          </div>
          <div class="descriptionbloc">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-lg-12">
                  <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">Habbit</strong>
                      <h3 class="mb-0">
                        <a class="text-dark" href="#">SWEAT CESI</a>
                      </h3>
                      <div class="mb-1 text-muted">20€</div>
                      <p class="card-text mb-auto">Nos super sweat sont bientot en rupture de stock</p>
                      <a href="#">Check</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="../Image/sweat.jpg" data-holder-rendered="true">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-lg-12">
                  <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">Habbit</strong>
                      <h3 class="mb-0">
                        <a class="text-dark" href="#">SWEAT CESI</a>
                      </h3>
                      <div class="mb-1 text-muted">20€</div>
                      <p class="card-text mb-auto">Nos super sweat sont bientot en rupture de stock</p>
                      <a href="#">Check</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="../Image/sweat.jpg" data-holder-rendered="true">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-lg-12">
                  <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">Habbit</strong>
                      <h3 class="mb-0">
                        <a class="text-dark" href="#">SWEAT CESI</a>
                      </h3>
                      <div class="mb-1 text-muted">20€</div>
                      <p class="card-text mb-auto">Nos super sweat sont bientot en rupture de stock</p>
                      <a href="#">Check</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="../Image/sweat.jpg" data-holder-rendered="true">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="ptitbloc">
          <div class="titrebloc">
            <h3>Idées les plus like</h3>
          </div>
          <div class="descriptionbloc">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-lg-6">
                  <div class="flip-card-v2">
                    <div class="flip-card-inner-v2">
                      <div class="flip-card-front-v2">
                        <img src="./Image/imagetest2.jpg" alt="Avatar" style="width:375px;height:200px;">
                        <div>
                          <p>Course de moto</p>
                        </div>
                      </div>
                      <div class="flip-card-back-v2">
                        <h1>Joo Bar</h1>
                        <p>A2</p>
                        <p>Propose de faire un stage de découverte de course à moto</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-lg-6">
                  <div class="flip-card-v2">
                    <div class="flip-card-inner-v2">
                      <div class="flip-card-front-v2">
                        <img src="./Image/laser.jpg" alt="Avatar" style="width:375px;height:200px;">
                        <div>
                          <p>Laser Game</p>
                        </div>
                      </div>
                      <div class="flip-card-back-v2">
                        <h1>Claire Ivoipa</h1>
                        <p>A2</p>
                        <p>Après midi laser game</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection