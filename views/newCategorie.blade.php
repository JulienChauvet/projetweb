@extends('layout')

@section('link')

@endsection

@section('content')
<form class="section" action="/nouvelle_catégorie" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="field">
    <br>
    <label for="Category">Nom de la Catégorie :</label>
    <div class="control">
      <input type="text" placeholder="Entrez Nom de la Category" name="Category" value="{{ old('Category') }}" required>
    </div>
    @if($errors->has('Category'))
    <p class="alert alert-danger">{{ $errors->first('Category') }}</p>
    @endif
  </br>
</div>
<div class="field">
  <div class="control">
    <button class="button is-link" type="submit">Ajouter une categorie</button>
  </div>
</div>
</form>
@endsection