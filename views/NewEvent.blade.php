@extends('layout')

@section('link')
@endsection

@section('content')
<form action="/ajout_suggestion" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <label for="Title"><b> Titre de l'évènement</b></label>
  <input type="text" placeholder="Entrez le titre de l'évènement" name="Title" value="{{ old('Title') }}" required>
  @if($errors->has('Title'))
  <p class="alert alert-danger">{{ $errors->first('Title') }}</p>
  @endif

  

  <label for="Description"><b> Description</b></label>
  <input type="text" placeholder="Entrez une description de l'évènement" name="Description" value="{{ old('Description') }}" required>
  @if($errors->has('Description'))
  <p class="alert alert-danger">{{ $errors->first('Description') }}</p>
  @endif

  <label for="Date"><b> Date de l'évènement</b></label>
  <input type="date" placeholder="Entrez le titre de l'évènement" name="Date" value="{{ old('Date') }}" required>
  @if($errors->has('Date'))
  <p class="alert alert-danger">{{ $errors->first('Date') }}</p>
  @endif

  <label for="Recurrent"><b> Évènement récurrent</b></label>
  <SELECT name="Recurrent" size="1">
    <OPTION selected>Non récurrent</OPTION>
    <OPTION>Quotidien</OPTION>
    <OPTION>Journalier</OPTION>
    <OPTION>Hebdomadaire</OPTION>
  </SELECT>

  <label for="Image">Image :</label>
      <div class="control">
        <input type="file" name="Image" value="{{ old('Image') }}" accept="image/png, image/jpeg">
      </div>
      @if($errors->has('Image'))
      <p class="alert alert-danger">{{ $errors->first('Image') }}</p>
      @endif
  
  <p><input type="submit" value="Suggérer l'évènement"></p>
</form>
@endsection