@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/styleconnection.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"/>

@endsection

@section('content')
<body>
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-1">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-5">
          <form action="/inscription" method="POST">
            {{ csrf_field() }}
            <div class="container">
              <h1 class="blanc">Créez-vous un espace personnel !</h1>
              <p class="blanc"><a style="color:red">*</a> champs obligatoires</p>
              <hr>
              <label for="text" class="blanc"><b> Prénom : </b></label><br>
              <input type="text" placeholder="Entrez votre prénom" name="Firstname" value="{{ old('Firstname') }}" required>
              @if($errors->has('Firstname'))
              <p class="alert alert-danger">{{ $errors->first('Firstname') }}</p>
              @endif
              <br>
              <label for="text" class="blanc"><b> Nom : </b></label><br>
              <input type="text" placeholder="Entrez votre nom" name="Lastname" value="{{ old('Lastname') }}" required>
              @if($errors->has('Lastname'))
              <p class="alert alert-danger">{{ $errors->first('Lastname') }}</p>
              @endif
              <br>
              <label for="text" class="blanc"><b> Campus : </b></label><br>
              <input type="text" placeholder="Entrez le nom de votre campus" name="Localisation" value="{{ old('Localisation') }}" required>
              @if($errors->has('Localisation'))
              <p class="alert alert-danger">{{ $errors->first('Localisation') }}</p>
              @endif
              <br>
              <label for="email" class="blanc"><b> E-mail</b></label><br>
              <input type="email" placeholder="Entrez votre Email" name="Email" value="{{ old('Email') }}" required>
              @if($errors->has('Email'))
              <p class="alert alert-danger">{{ $errors->first('Email') }}</p>
              @endif
              <br>
              <label for="psw" class="blanc"><b> Mot de passe</b></label><br>
              <input type="password" placeholder="Entrez votre mot de passe" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}" required title="6 caractères minimum, une lettre majuscule, une lettre minuscule et un chiffre">
              @if($errors->has('Password'))
              <p class="alert alert-danger">{{ $errors->first('Password') }}</p>
              @endif
              <br>
              <label for="psw-repeat" class="blanc"><b> Vérification mot de passe</b></label><br>
              <input type="password" placeholder="Répétez votre mot de passe" name="Password_confirmation" required>
              @if($errors->has('Password_confirmation'))
              <p class="alert alert-danger">{{ $errors->first('Password_confirmation') }}</p>
              @endif
              <br>
              <form method="g-recaptcha" action="../public/php/formm.php">
                <div class="g-recaptcha" data-sitekey="6LdznooUAAAAAOisR8q-AmqPYR5bNhPArtbyGM3A"></div>
                <br>
                <br>
              </form>
              <p class="blanc">En créant un compte vous acceptez nos <a href="#" style="color:dodgerblue">conditions d'utilisations</a>.</p>
              <div class="clearfix">
                <button type="submit" class="signupbtn"><strong>Inscription</strong></button>
              </div>
            </div>
          </form>
        </div>
      </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @endsection
