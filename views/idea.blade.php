@extends('layout')

@section('link')
@endsection

@section('content')
<div>
	<div class="container-fluid">
		<div class="row space">
			<div class="col-lg-1 col-md-1 col-sm-0">
			</div>
			<div class="col-lg-10 col-md-10 col-sm-12">
				<div class="image-container">
					<div class="text">BOITE A IDEE</div>
				</div> 
			</div>
			<div class="col-lg-1 col-md-1 col-sm-0">
			</div>
		</div>
		@foreach($events as $event)
		@if ($loop->iteration % 2 == 1)
		<div class="row space">
			<div class="col-lg-2 col-md-2 col-sm-0">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 center">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="{{ url('storage/' . $event->PictureLink) }}" alt="Avatar" class="tailleimg">
						</div>
						<div class="flip-card-back">
							<h1>{{$event->Title}}</h1>
							<p>{{$event->Description}}</p>
							<div class="input-group-button">
								<button id="voted" type="button" class="btn color input-number-increment">Vote</button>
							</div>
							<input type="text" class="input-number" value="0" min="0" max="1000" disabled>
							@if($role == 'BDE')
							<div class="input-group-button">
								<a href="/boîte_à_idée/validation:{{$event->id}}" id="validation" type="button" class="btn color input-number-increment">Validation de l'idée</a>
							</div>
							@endif
						</div>
					</div>
				</div> 
			</div>
			@endif
			@if ($loop->iteration % 2 == 0)
			<div class="col-lg-4 col-md-4 col-sm-6 center">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="{{ url('storage/' . $event->PictureLink) }}" alt="Avatar" class="tailleimg">
						</div>
						<div class="flip-card-back">
							<h1>{{$event->Title}}</h1>
							<p>{{$event->Description}}</p>
							<div class="input-group-button">
								<button id="voted" type="button" class="btn color input-number-increment">Vote</button>
							</div>
							<input type="text" class="input-number" value="0" min="0" max="1000" disabled>
							@if($role == 'BDE')
							<div class="input-group-button">
								<a href="/boîte_à_idée/validation:{{$event->id}}" id="validation" type="button" class="btn color input-number-increment">Validation de l'idée</a>
							</div>
							@endif
						</div>
					</div>
				</div> 
			</div>
			<div class="col-lg-2 col-md-2 col-sm-0">
			</div>
			
		</div>
		@endif
			@endforeach
		</div>
		<div class=container-fluid>	
		<div class="row space">
			<div class="col-lg-5">
			</div>
			<div class="col-lg-2 center">
				@if($role == 'BDE')
				<div class="input-group-button">
					<a id="voted" type="button" href="/boîte_à_idée/ajout_suggestion" class="btn color input-number-increment">Proposer un évènement</a>
				</div>
				@endif
			</div>
			<div class="col-lg-5">
			</div>
		</div>
		</div>
</div>
@endsection