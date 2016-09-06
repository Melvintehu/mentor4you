@extends('master')


@section('content')
	
	<section class="container-fluid space-inside-sides-xl">
		

		<div class="row">

			<div class="col-lg-12 space-outside-lg"> 

				<h1>Aanmelden als mentor</h1>

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

				<a href="/over-ons" class="btn-standard bg-secondary text-color-light light space-outside-down-lg"> WAT HOUDT MENTOR4YOU IN ? </a>

			</div>

		</div>

		<div class="divider bg-accent"></div>

	</section>

	<section class="container-fluid space-outside-lg space-outside-sides-xl">

			
		<div class="row">
			
			<div class="col-lg-12 space-outside-down-lg">
			
				<h1> AANMELDEN </h1>	

			</div>

			<div class="col-lg-12">
				
				<p class="text bold">
					
					Vul het onderstaand formulier in

				</p>

			</div>

			<div class="col-lg-12 space-inside-sides-md">
				
				<div class="row">
						
					
					<div class="col-lg-5 clear-left"> 

						<input class="input border border-accent space-outside-xs" placeholder="Voornaam" type="text" name="voornaam">

					</div>

					<div class="col-lg-5 clear-left"> 

						<input class="input border border-accent space-outside-xs" placeholder="Achternaam" type="text" name="achternaam">

					</div>


					<div class="col-lg-5 clear-left"> 

						<input class="input border border-accent space-outside-xs" placeholder="Telefoonnummer" type="text" name="telefoonnummer">

					</div>

					<div class="col-lg-5 clear-left"> 
						
						<input class="input border border-accent space-outside-xs" placeholder="E-mailadres" type="text" name="emailadres">

					</div>

					<div class="col-lg-5 clear-left"> 

						<input class="input border border-accent space-outside-xs" placeholder="Geboortedatum" type="text" name="geboortedatum">

					</div>

					<div class="col-lg-7 clear-left"> 


						<textarea class="textarea border border-accent space-outside-xs"></textarea>


					</div>

					<div class="col-lg-12 space-outside-md"> 

						<input class="btn-standard bg-secondary text-color-light light"  type="submit" name="verzenden">

					</div>

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