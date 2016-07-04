@extends('master')


@section('content')
	
	<section class="container-fluid push-aside-85">
		

		<div class="row">

			<div class="col-lg-12 push-65"> 

				<h1>IK ZOEK EEN MENTOR</h1>

			</div>

			<div class="col-lg-5 push-0-65">
				
				<div class="image aanmelden-foto">
					
					<img src="images/resultaten5.jpg" alt="jongere die zich wil aanmelden">

				</div>

			</div>
			
			<div class="col-lg-7 push-aside-35">
				
				<p class="text push-0-65 ">
					Morbi elementum, quam ut suscipit elementum, risus libero tincidunt est, 
					auctor imperdiet elit felis vel turpis. 
					Ut ac nulla eget neque tincidunt rutrum. Sed varius dictum elit, ac scelerisque 
					lorem pharetra eu. Ut pellentesque, diam vitae consequat elementum, ligula 
					ipsum viverra elit, sed pharetra nunc purus sit amet dolor. 
					Nulla facilisi. 
					Aliquam rutrum orci ut turpis laoreet, eget convallis tellus ornare. 	

				</p>

				<a href="#" class="btn-standard bg-secondary push-0-65"> WAT HOUDT MENTOR4YOU IN ? </a>

			</div>

		</div>

		<div class="divider bg-accent"></div>

	</section>

	<section class="container-fluid push-65 push-aside-85">

			
		<div class="row">
			
			<div class="col-lg-12 push-0-65">
			
				<h1> AANMELDEN </h1>	

			</div>

			<div class="col-lg-12">
				
				<p class="text bold">
					
					Vul het onderstaand formulier in

				</p>

			</div>

			<div class="col-lg-12 push-35">
				
				<div class="col-lg-12"> 

					<input class="input border border-accent push-0-35" placeholder="Voornaam" type="text" name="voornaam">

				</div>

				<div class="col-lg-12"> 

					<input class="input border border-accent push-0-35" placeholder="Achternaam" type="text" name="achternaam">

				</div>


				<div class="col-lg-12"> 

					<input class="input border border-accent push-0-35" placeholder="Telefoonnummer" type="text" name="telefoonnummer">

				</div>

				<div class="col-lg-12"> 

					<input class="input border border-accent push-0-35" placeholder="E-mailadres" type="text" name="emailadres">

				</div>

				<div class="col-lg-12"> 

					<input class="input border border-accent push-0-35" placeholder="Geboortedatum" type="text" name="geboortedatum">

				</div>

				<div class="col-lg-12"> 


					<textarea class="textarea border border-accent"></textarea>


				</div>

				<div class="col-lg-12 push-65-0"> 

					<input class="btn-standard bg-secondary black"  type="submit" name="verzenden">

				</div>

				<div class="col-lg-12 push-65">

					<p class="text ">

						Bedankt voor het aanmelden. Wij nemen zo spoedig mogelijk contact met je op.

					</p>

				</div>

			</div>


		</div>


	</section>

@stop