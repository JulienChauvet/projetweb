
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
    <center><h1 class="titrePage">Vous souhaitez proposer un évènement?</h1>
      <h2 class="titrePage">N'attendez plus :</h2></center>
    </div>
  </div>



<div class="body">
    <div class="row">
      <form action="/boîte_à_idée/validation" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}

   <div class="col-lg-2 col-md-2 col-sm-2">
  <label for="Title">
  <input  type="HIDDEN" class="valeur" name="ID" value="{{$events->id}}" >
  @if($errors->has('id'))
  <p class="alert alert-danger">{{ $errors->first('id') }}</p>
  @endif
</div>

  <div class="col-lg-2 col-md-2 col-sm-2">
  <label for="Title"><b> Titre de l'évènement</b></label>
  <input type="text" placeholder="Entrez le titre de l'évènement" class="valeur" name="Title" value="{{$events->Title}}" >
  @if($errors->has('Title'))
  <p class="alert alert-danger">{{ $errors->first('Title') }}</p>
  @endif
</div>
  
  <div class="col-lg-2 col-md-2 col-sm-2">
  <label for="Description"><b> Description</b></label>
  <input type="text" placeholder="Entrez une description de l'évènement" class="valeur" name="Description" value="{{$events->Description}}" >
  @if($errors->has('Description'))
  <p class="alert alert-danger">{{ $errors->first('Description') }}</p>
  @endif
</div>


  <div class="col-lg-2 col-md-2 col-sm-2">
  <label for="Date"><b> Date de l'évènement</b></label>
  <input type="date" placeholder="Entrez le titre de l'évènement" class="valeur" name="Date" value="{{$events->DateEvent}}" >
  @if($errors->has('Date'))
  <p class="alert alert-danger">{{ $errors->first('Date') }}</p>
  @endif
</div>


  <div class="col-lg-2 col-md-2 col-sm-2">
  <label for="Recurrent"><b> Évènement récurrent</b></label>
  <SELECT name="Recurrent" size="1" class="valeur" >
    <OPTION selected>{{$events->Recurrence}}</OPTION>
     <OPTION>Non récurrent</OPTION>
    <OPTION>Quotidien</OPTION>
    <OPTION>Journalier</OPTION>
    <OPTION>Hebdomadaire</OPTION>
  </SELECT>
</div>

 
  
  <p><input type="submit" class="centre" value="Valider l'évènement"></p>
</form>
@endsection