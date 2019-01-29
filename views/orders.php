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

<div class="container-fluid margTop">
  <div class="row">
    <div class="col-lg-1 col-md-0 col-sm-0">
    </div>
    <div class="col-lg-10 col-md-12 col-sm-0">
      <div class="accordion" id="acc1">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" style="width:1500px; float:center;" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                nom Users
              </button>
            </h5>
          </div>
          <div id="collapse2" class="collapse show" aria-labelledby="headingOne" data-parent="#acc1">
            <div class="card-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><b>Nom des articles</b></p>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><b>Quantité</b></p>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><b>Prix</b></p>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><b>Prix total :</b></p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><input type="date" class="centre" name="date"></p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><input type="text" class="centre" placeholder="Suggérer le lieu"></p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <p><input type="submit" class="centre" value="Suggérer l'évènement"></p>
                  </div>
                </div>
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