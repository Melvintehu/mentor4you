@extends('master')


@section('content')
	
	<section class="container-fluid space-inside-sides-xl">
		

		<div class="row">

			<div class="col-lg-12 space-outside-lg"> 

				<h1>{{ $data['aanmeldenMentoren']->title }}</h1>

			</div>

			<div class="col-lg-5 space-outside-down-lg">
				
				<div class="image aanmelden-foto">
					
					<img src="images/foto1.jpg" alt="mentor die zich wil aanmelden">

				</div>

			</div>
			
			<div class="col-lg-7 space-inside-sides-md">
				
				<p class="text space-outside-down-lg ">
					{!! nl2br($data['aanmeldenMentoren']->body) !!}		

				</p>

				<a href="/over-ons" class="btn-standard bg-secondary text-color-light light space-outside-down-lg"> MEER OVER MENTOR4YOU </a>

			</div>

		</div>

		<div class="divider bg-accent"></div>

	</section>

	<section class="container-fluid space-outside-lg space-outside-sides-xl">

			
		<div class="row">
			
			<div class="col-lg-12 space-outside-down-lg">
			
				<h1> {{ $data['aanmelden']->title }}	 </h1>	

			</div>

			<div class="col-lg-8 space-outside-down-md">
				
				<p>{!! nl2br($data['aanmelden']->body) !!}	</p>

			</div>

			<div class="col-lg-12">
				
				<p class="text bold">
					
					Vul het onderstaand formulier in

				</p>

			</div>

{!! Form::open(['method' => 'POST', 'action' => 'MailController@mentorMail']) !!}

		{{ csrf_field() }}

		<div class="col-lg-12 space-outside-md">

			<div class="col-lg-5"> 
    			{!! Form::text('voornaam', null, ['required', 'placeholder' => 'Voornaam', 'class' => 'input border border-accent space-outside-xs']) !!}
    		</div>

    		<div class="col-lg-5 clear-left"> 
    			{!! Form::text('achternaam', null, ['required', 'placeholder' => 'Achternaam', 'class' => 'input border border-accent space-outside-xs']) !!}
    		</div>


			<div class="col-lg-5 clear-left"> 
				{!! Form::text('telefoonnummer', null, ['required', 'placeholder' => 'Telefoonnummer', 'class' => 'input border border-accent space-outside-xs']) !!}
			</div>

			<div class="col-lg-5 clear-left"> 
				
				{!! Form::text('emailadres', null, ['required', 'placeholder' => 'Uw emailadres', 'class' => 'input border border-accent space-outside-xs']) !!}
			</div>

			<div class="col-lg-5 clear-left"> 
				
				{!! Form::date('geboortedatum', null, ['required', 'placeholder' => '', 'class' => 'input border border-accent space-outside-xs']) !!}
			</div>
				
			<div class="col-lg-7 clear-left"> 	

				{!! Form::textarea('bericht', null, ['required', 'placeholder' => 'Uw bericht of opmerking', 'class' => 'textarea border border-accent space-outside-xs']) !!}
			</div>

			<div class="col-lg-12 space-outside-sm"> 
				 {!! Form::submit('Verzenden', ['class' => 'btn-standard bg-secondary text-color-light light']) !!}
			</div>

		</div>

			{!! Form::close() !!}

					<div class="col-lg-12">

						<p class=" ">

							Bedankt voor het aanmelden. Wij nemen zo spoedig mogelijk contact met je op.

						</p>

					</div>
					
				</div>

			</div>


		</div>


	</section>

@stop