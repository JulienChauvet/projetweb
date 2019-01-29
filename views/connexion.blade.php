@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/styleconnection.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('../css/nav.css') }}"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('../css/background.css') }}"/>
@endsection

@section('content')
<div class="col-sm-12 col-md-6 col-lg-5 backgR backGL">
  <form action="/connexion" method="POST">
    {{ csrf_field() }}
    <div class="container">
      <h1>Connectez-vous à votre espace personnel</h1>
      <p><a href="#" style="color:red">*</a> champs obligatoires</p>
      <hr>
      <label for="email"><b> E-mail</b></label>
      <input type="email" placeholder="Entrez votre Email" name="Email" value="{{ old('Email') }}" required>
      @if($errors->has('Email'))
      <p class="alert alert-danger">{{ $errors->first('Email') }}</p>
      @endif
      <label for="psw"><b> Mot de passe</b></label>
      <input type="password" placeholder="Entrez votre mot de passe" name="Password" required>
      @if($errors->has('Password'))
      <p class="alert alert-danger">{{ $errors->first('Password') }}</p>
      @endif
      <form method="g-recaptcha" action="../public/php/formm.php">
        <div class="g-recaptcha" data-sitekey="6LdznooUAAAAAOisR8q-AmqPYR5bNhPArtbyGM3A"></div>
        <br>
        <br>
      </form>
      
      <div class="clearfix">
        <button type="submit" class="signupbtn"><strong>CONNECTEZ-VOUS</strong></button>
      </div>
      <u><a href="#" style="color:white">Mot de passe oublié ?</a></u>
      <br>
      <br>
      <p>Vous n'avez pas encore d'espace personnel pour vous inscrire ?</p>
      <u><a href="/inscription" style="color:white">Créez votre espace maintenant !</a></u>
      <div class="col-sm-12 col-md-6 col-lg-1">
      </div>
    </div>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection
