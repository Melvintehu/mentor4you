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

				<div class="image ">

					<img class="height-auto" src="images/maps.jpg" alt="Google maps locatie Mentor4you">

				</div>

			</div>

		</div>

	</section>

@stop