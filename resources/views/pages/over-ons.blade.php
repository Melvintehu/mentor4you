@extends('master')


@section('content')

	<section class="container-fluid push-65 push-aside-85">

			
		<div class="row">
			
			<div class="col-lg-12 push-0-65 text-center">

				<h1>{{ $data['titel']->title }}</h1>

			</div>

			<div class="col-lg-12 push-0-65 ">

				<div class="divider bg-accent"></div>

			</div>

			<div class="col-lg-6">

				<h3 class="push-0-20">{{ $data['kop1']->title }}</h3>

				<p class="text push-0-35">
					{{ $data['kop1']->body }}
				</p>

			</div>

			<div class="col-lg-6">

				<h3 class="push-0-20">{{ $data['kop2']->title }}</h3>

				<p class="text push-0-35">
					{{ $data['kop2']->body }}
				</p>

			</div>

			<div class="col-lg-6  push-0-35">

				<h3 class="push-0-20">{{ $data['kop3']->title }}</h3>

				<p class="text">
					{{ $data['kop3']->body }}
				</p>

			</div>

			<div class="col-lg-6  push-0-65">

				<h3 class="push-0-20">{{ $data['kop4']->title }}</h3>

				<p class="text">
					{{ $data['kop4']->body }}
				</p>

			</div>

			<div class="col-lg-12">

				<div class="divider bg-accent"></div>

			</div>			

		</div>

	</section>

	<section class="container-fluid no-overflow push-65">

			
		<div class="row row-centered">
			
			<div class="col-lg-12 push-0-65 text-center">

				<h1>{{ $data['hetteam']->title }}</h1>

			</div>			

			<div class="image push-0-35">

				<div class="col-lg-12 banner push-aside-85">
						
					<div class="push-0-20 right">
						
						<h1 class="white"> Karin Oldenburger </h1>
						
						<p class="white text-right">
							
							Non ipsum vulputate condimentum eu id tellus. <br>
							Praesent commodo arcu quis rhoncus. <br>
							Suspendisse volutpat, quam eu. <br>

						</p>

					</div>

					<img src="images/banner.jpeg" alt='banner image mentor4you' />

				</div>


				<div class="slider-arrow slider-arrow-left"> <a class="a a-slider" href="#"> < </a></div>

				<div class="slider-arrow slider-arrow-right"> <a class="a a-slider" href="#"> > </a></div>

			</div>

			<div class="col-lg-12 push-0-20 text-center">

				<div class="col-lg-1 bg-accent circle circle-sm hover-black col-centered push-aside-0-20-m"></div>

				<div class="col-lg-1 bg-accent circle circle-sm hover-black col-centered push-aside-0-20-m"></div>

				<div class="col-lg-1 bg-accent circle circle-sm hover-black col-centered push-aside-0-20-m"></div>

				<div class="col-lg-1 bg-accent circle circle-sm hover-black col-centered push-aside-0-20-m"></div>

			</div>


		</div>

	</section>

	<section class="container-fluid push-65 bg-accent">

		<div class="row-centered push-aside-85 ">


			<div class="col-lg-12 push-35-20 ">

				<h3 class="text-center">{{ $data['aanmeldbox']->title }}</h3>

			</div>

			<div class="col-lg-4 col-centered push-0-35">

				<p class="text-center">
					{{ $data['aanmeldbox']->body }}
				</p>

			</div>

			<div class="col-lg-12 text-center push-0-35">

				<a href="/aanmelden-als-mentor" class="btn-standard bg-secondary push-0-35 ">Mentor worden</a>

				<a href="/aanmelden-als-jongere"  class="push-aside-20-m btn-standard bg-secondary ">Aanmelden als jongere</a>

			</div>


		</div>

	</section>
@stop