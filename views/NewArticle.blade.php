@extends('layout')

@section('link')

@endsection

@section('content')
<form action="/ajout_article" method="POST">
  {{ csrf_field() }}

  <label for="Article"><b> Nom de l'article</b></label>
  <input type="text" placeholder="Entrez  Nom de l'article" name="Article" value="{{ old('Article') }}" required>
  @if($errors->has('Article'))
  <p class="alert alert-danger">{{ $errors->first('Article') }}</p>
  @endif

  <label for="Description"><b> Description</b></label>
  <input type="text" placeholder="Entrez une description de l'article" name="Description" value="{{ old('Description') }}" required>
  @if($errors->has('Description'))
  <p class="alert alert-danger">{{ $errors->first('Description') }}</p>
  @endif

  <label for="Prix"><b> Prix</b></label>
  <input type="number" placeholder="Entrez le prix de l'article" name="Prix" value="{{ old('Prix') }}" required>
  @if($errors->has('Prix'))
  <p class="alert alert-danger">{{ $errors->first('Prix') }}</p>
  @endif

  <label for="Image"><b> Image</b></label>
  <input type="file" name="Image" value="{{ old('Image') }}" accept="image/png, image/jpeg">
  @if($errors->has('Image'))
  <p class="alert alert-danger">{{ $errors->first('Image') }}</p>
  @endif

  <p><input type="submit" value="Ajouter l'article"></p>

</form>
@endsection