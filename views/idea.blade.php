@extends('layout')

@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('../css/flip.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('../css/container.css') }}"/>
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
			<div class="col-lg-1 col-md-2 col-sm-0">
			</div>
			<div class="col-lg-5 col-md-4 col-sm-6 center">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="./Image/imagetest2.jpg" alt="Avatar" class="tailleimg">
						</div>
						<div class="flip-card-back">
							<h1>{{$event->Title}}</h1>
							<p>{{$event->Description}}</p>
							<div class="input-group-button">
								<button id="voted" type="button" class="btn color input-number-increment">Vote</button>
							</div>
							<input type="text" class="input-number" value="0" min="0" max="1000" disabled>
						</div>
					</div>
				</div> 
			</div>
			@endif
			@if ($loop->iteration % 2 == 0)
			<div class="col-lg-5 col-md-4 col-sm-6 center">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="./Image/foot.jpg" alt="Avatar" class="tailleimg">
						</div>
						<div class="flip-card-back">
							<h1>{{$event->Title}}</h1>
							<p>{{$event->Description}}</p>
							<div class="input-group-button">
								<button id="voted" type="button" class="btn color input-number-increment">Vote</button>
							</div>
							<input type="text" class="input-number" value="0" min="0" max="1000" disabled>
						</div>
					</div>
				</div> 
			</div>
			@endif
			@endforeach
			<div class="col-lg-1 col-md-2 col-sm-0">
			</div>
		</div>
		<div class="row space">
			<div class="col-lg-5">
			</div>
			<div class="col-lg-2 center">
				<div class="input-group-button">
					<button id="voted" type="button" class="btn color input-number-increment">Proposer un évènement</button>
				</div>
			</div>
			<div class="col-lg-5">
			</div>
		</div>
	</div>
</div>
@endsection