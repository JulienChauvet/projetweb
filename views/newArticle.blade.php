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
    <center><h1 class="titrePage">Vous souhaitez rajouter un article?</h1>
      <h2 class="titrePage">N'attendez plus :</h2></center>
    </div>
  </div>
  <div class="body">
    <div class="row">
      <form class="section upmarg" action="/boutique/nouvel_article" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="field col-lg-2 col-md-2 col-sm-2">
          <br>
          <center><label for="Article">Nom de l'article :</label><center>
            <div class="control">
              <input type="text" placeholder="Entrez Nom de l'article" class="valeur" name="Article" value="{{ old('Article') }}" required>
            </div>
            @if($errors->has('Article'))
            <p class="alert alert-danger">{{ $errors->first('Article') }}</p>
            @endif
          </br>
        </div>
        <div class="field col-lg-2 col-md-2 col-sm-2">
          <br>
          <center><label for="Description">Description :</label></center>
          <div class="control">
            <input type="text" placeholder="Entrez une description" class="valeur" name="Description" value="{{ old('Description') }}" required>
          </div>
          @if($errors->has('Description'))
          <p class="alert alert-danger">{{ $errors->first('Description') }}</p>
          @endif
        </br>
      </div>
      <div class="field col-lg-2 col-md-2 col-sm-2">
        <br>
        <center><label for="Prix">Prix :</label></center>
        <div class="control">
          <input type="text" placeholder="Entrez  Nom de l'article" class="valeur" name="Prix" value="{{ old('Prix') }}" required>
        </div>
        @if($errors->has('Prix'))
        <p class="alert alert-danger">{{ $errors->first('Prix') }}</p>
        @endif
      </br>
    </div>
    <div class="field col-lg-2 col-md-2 col-sm-2">
      <br>
      <center><label for="Catégorie">Catégorie : </label></center>
      <div class="control">
          @foreach($categories as $category)
             <span><input type="checkbox" id="MonthEvent" name="évènement du mois" value="évènement du mois"> {{$category->Name}}</span>        
            @endforeach
        </div>
        @if($errors->has('Catégorie'))
        <p class="alert alert-danger">{{ $errors->first('Catégorie') }}</p>
        @endif
      </br>
    </div>
    <div class="field col-lg-2 col-md-2 col-sm-2">
      <br>
      <center><label for="Image">Image :</label></center>
      <div class="control">
        <input type="file" name="Image" value="{{ old('Image') }}" accept="image/png, image/jpeg">
      </div>
      @if($errors->has('Image'))
      <p class="alert alert-danger">{{ $errors->first('Image') }}</p>
      @endif
    </br>
  </div>
  <div class="field col-lg-2 col-md-2 col-sm-2">
    <div class="control">
      <button class="button is-link bouton" type="submit">Ajouter</button>
    </div>
  </div>
</form>
</div>
</div>

<div class="row">
<a href="/boutique/nouvelle_catégorie"><button class="button is-link top" type="submit">Ajouter une catégorie</button></a>
  </div>
@endsection








