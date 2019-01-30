<!-- child of the page : layout.blade.php -->
@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('../css/article.css') }}"/>
@endsection


<!-- body of the page : layout.blade.php -->
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
          <!-- form to add new category in the database -->
      <form class="section" action="/boutique/nouvelle_catégorie" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        
          <div class="field">
            <br>
            <!--check if the category didn't already exist -->
            <center><label for="Category">Nom de la Catégorie :</label></center>
            <div class="control">
              <input type="text" placeholder="Entrez le nom de la catégorie" class="valeur" name="Category" value="{{ old('Category') }}" required>
            </div>
            @if($errors->has('Category'))
            <p class="alert alert-danger">{{ $errors->first('Category') }}</p>
            @endif
          </br>
        </div>

        <div class="field">
          <div class="control">
            <button class="button is-link btncentre" type="submit">Ajouter</button>
          </div>
        </div>
      
      
    </form>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5">
      </div>

  </div>
</div>
@endsection