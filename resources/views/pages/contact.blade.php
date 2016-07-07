@extends('master')


@section('content')

	<section class="container-fluid push-65 push-aside-85">

			
		<div class="row">
			
			<div class="col-lg-12 push-0-65">
			
				<h1> {{ $data['titel']->title }} </h1>	

			</div>

			<div class="col-lg-12 push-0-65">

				<p class="text">

					{{ $data['titel']->body }} 

				</p>

			</div>

			<div class="col-lg-12 push-0-35">
				
				<p class="text bold">
					
					{{ $data['bold']->title }} 

				</p>

			</div>

			<div class="col-lg-12 push-35">
				
				<div class="col-lg-12"> 

					<input class="input border border-accent push-0-35" placeholder="Uw volledige naam" type="text" name="voornaam">

				</div>

				<div class="col-lg-12"> 

					<input class="input border border-accent push-0-35" placeholder="Uw e-mailadres*" type="text" name="voornaam">

				</div>


				<div class="col-lg-12"> 

					<input class="input border border-accent push-0-35" placeholder="Uw telefoonnummer*" type="text" name="voornaam">

				</div>

				<div class="col-lg-12"> 

					<textarea class="textarea border border-accent push-0-65" placeholder="Bericht of opmerking"></textarea>

				</div>

				<div class="col-lg-12 push-0-35"> 

					<input class="btn-standard bg-secondary" value="VERZENDEN" type="submit" name="verzenden">

				</div>

				<div class="col-lg-12 push-0-35">
				
					<p class="text">
						
						Uw bericht is verzonden. Wij nemen zo spoedig mogelijk contact met u op.

					</p>

			</div>

			</div>


		</div>

		<div class="divider bg-accent"></div>

	</section>

	<section class="container-fluid push-65 push-aside-85">

			
		<div class="row">
			
			<div class="col-lg-2 push-0-65">
			
				<h3> {{ $data['vestiging']->title }} </h3>	

			</div>

			<div class="col-lg-8 push-0-65">
			
				<p class="text">
						
						{{ $data['vestiging']->body }} 

				</p>	

			</div>

			<div class="col-lg-12 push-0-35">

				<div class="image google-maps-contact-foto">

					<img src="images/maps.jpg" alt="Google maps locatie Mentor4you">

				</div>

			</div>

		</div>

	</section>

@stop