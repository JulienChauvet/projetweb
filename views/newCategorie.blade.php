@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('../css/article.css') }}"/>
@endsection

@section('content')




<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3">
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6">
    <center><h1 class="titrePage">Vous souhaitez rajouter une catégorie?</h1>
      <h2 class="titrePage">N'attendez plus :</h2></center>
    </div>
  </div>



  <div class="body">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-5">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
      <form class="section" action="/ajout_categorie" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        
          <div class="field">
            <br>
            <center><label for="Categorie">Nom de la Catégorie :</label></center>
            <div class="control">
              <input type="text" placeholder="Entrez Nom de la Categorie" class="valeur" name="Categorie" value="{{ old('Categorie') }}" required>
            </div>
            @if($errors->has('Categorie'))
            <p class="alert alert-danger">{{ $errors->first('Categorie') }}</p>
            @endif
          </br>
        </div>

        <div class="field">
          <div class="control">
            <button class="button is-link btncentre" type="submit">Ajouter Categorie</button>
          </div>
        </div>
      
      
    </form>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5">
      </div>

  </div>
</div>
@endsection