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
    <center><h1 class="titrePage">Vous souhaitez proposer un évènement?</h1>
      <h2 class="titrePage">N'attendez plus :</h2></center>
    </div>
  </div>



  <div class="body">
    <!-- form to add suggestion for event -->
    <form action="/ajout_suggestion" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2">
          <label for="Title"><b> Titre de l'évènement</b></label>
          <input type="text" placeholder="Entrez le titre de l'évènement" class="valeur" name="Title" value="{{ old('Title') }}" required>
          <!-- check if it is not any error -->
          @if($errors->has('Title'))
          <p class="alert alert-danger">{{ $errors->first('Title') }}</p>
          @endif
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2">
          <label for="Description"><b> Description</b></label>
          <input type="text" placeholder="Entrez une description de l'évènement" class="valeur" name="Description" value="{{ old('Description') }}" required>
          <!-- check if it is not any errors -->
          @if($errors->has('Description'))
          <p class="alert alert-danger">{{ $errors->first('Description') }}</p>
          @endif
        </div>


        <div class="col-lg-2 col-md-2 col-sm-2">
          <label for="Date"><b> Date de l'évènement</b></label>
          <input type="date" class="valeur" name="Date" value="{{ old('Date') }}" required>
           <!-- check if it is not any error -->
          @if($errors->has('Date'))
          <p class="alert alert-danger">{{ $errors->first('Date') }}</p>
          @endif
        </div>


        <div class="col-lg-2 col-md-2 col-sm-2">
          <label for="Recurrent"><b> Évènement récurrent</b></label>
          <SELECT name="Recurrent" size="1" class="valeur" >
            <OPTION selected>Non récurrent</OPTION>
            <OPTION>Quotidien</OPTION>
            <OPTION>Journalier</OPTION>
            <OPTION>Hebdomadaire</OPTION>
          </SELECT>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2">
          <label for="Image">Image :</label>
          <div class="control">
            <input type="file" name="Image" value="{{ old('Image') }}" accept="image/png, image/jpeg">
          </div>
           <!-- check if it is not any error -->
          @if($errors->has('Image'))
          <p class="alert alert-danger">{{ $errors->first('Image') }}</p>
          @endif
        </div>
      </div>
      <div class="row">
        <p><input type="submit" class="centre" value="Suggérer l'évènement"></p>
      </div>
    </form>
    @endsection