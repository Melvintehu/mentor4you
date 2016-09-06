@extends('master')


@section('content')

	<section class="container-fluid space-inside-sides-xl space-outside-lg">

			
		<div class="row">
			
			<div class="col-lg-12 space-outside-down-lg">
			
				<h1> {{ $data['titel']->title }} </h1>	

			</div>

			<div class="col-lg-12 space-outside-down-lg">

				<p class="text">

					{{ $data['titel']->body }} 

				</p>

			</div>

			<div class="col-lg-12 space-outside-down-msm">
				
				<p class="text bold">
					
					{{ $data['bold']->title }} 

				</p>

			</div>
		
		{!! Form::open(['method' => 'POST', 'action' => 'MailController@contactMail']) !!}

		{{ csrf_field() }}

		<div class="col-lg-12 space-outside-sm">

			<div class="col-lg-5 clear-left"> 
    			{!! Form::text('naam', null, ['required', 'placeholder' => 'Uw volledige naam', 'class' => 'input border border-accent space-outside-xs']) !!}
    		</div>

			<div class="col-lg-5 clear-left"> 
				
				{!! Form::text('emailadres', null, ['required', 'placeholder' => 'Uw emailadres', 'class' => 'input border border-accent space-outside-xs']) !!}
			</div>

			<div class="col-lg-7 clear-left"> 
				{!! Form::text('telefoonnummer', null, ['required', 'placeholder' => 'Telefoonnummer', 'class' => 'input border border-accent space-outside-xs']) !!}
			</div>
				
			<div class="col-lg-7 clear-left"> 	

				{!! Form::textarea('bericht', null, ['required', 'placeholder' => 'Uw bericht of opmerking', 'class' => 'textarea border border-accent space-outside-xs']) !!}
			</div>

			<div class="col-lg-12 space-outside-sm"> 
				 {!! Form::submit('Verzenden', ['class' => 'btn-standard bg-secondary light text-color-light']) !!}
			</div>

		</div>

			{!! Form::close() !!}

				<div class="col-lg-12 space-outside-xs">
				
					<p class="text">
						
						Uw bericht is verzonden. Wij nemen zo spoedig mogelijk contact met u op.

					</p>

			</div>

			</div>


		</div>

		<div class="divider bg-accent"></div>

	</section>

	<section class="container-fluid space-inside-sides-xl space-outside-lg">

			
		<div class="row">
			
			<div class="col-lg-2 space-outside-down-lg">
			
				<h3> {{ $data['vestiging']->title }} </h3>	

			</div>

			<div class="col-lg-8 space-outside-down-lg">
			
				<p class="text">
						
						{{ $data['vestiging']->body }} 

				</p>	

			</div>

			<div class="col-lg-12 space-outside-down-md">

				<div class="image hidden-xs hidden-sm">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2391.6764854797398!2d6.371781515333525!3d53.169843795618824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c835a3911d22df%3A0x4c2e8f57f281cd81!2sRodenburg+1B%2C+9351+PV+Leek!5e0!3m2!1snl!2snl!4v1473158921917" width="1600" height="750" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
				
				<div class="image hidden-lg hidden-md">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2391.6764854797398!2d6.371781515333525!3d53.169843795618824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c835a3911d22df%3A0x4c2e8f57f281cd81!2sRodenburg+1B%2C+9351+PV+Leek!5e0!3m2!1snl!2snl!4v1473158921917" width="992" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

			</div>

		</div>

	</section>

@stop