@extends('master')


@section('content')

	<section class="container-fluid push-65 push-aside-85">

			
		<div class="row">

			<div class="col-lg-12 push-0-65 text-center">

				<h1>{{ $data['titel']->title }}</h1>

			</div>

			<div class="col-lg-8 push-0-65">

				<h3 class="push-0-35">{{ $data['eerste_kop']->title }}</h3>

				<p class="text push-0-65">
					
					{{ $data['eerste_kop']->body }}

				</p>

				<h3 class="push-0-35">{{ $data['tweede_kop']->title }}</h3>

				<p class="text">
					
					{{ $data['tweede_kop']->title }}
				
				</p>

			</div>

			<div class="col-lg-4 push-0-65 push-aside-35  bg-accent">

				<div class="row">
					

					<div class="col-lg-12 push-35-0">
								
						<div class="row">


							<div class="col-lg-2 col-sm-2 col-xs-2 push-0-35">
								
								<div class="circle circle-md bg-secondary "> <span class="white"> B </span></div>	

							</div>

							<div class="col-lg-10 col-sm-10 col-xs-10 push-20">
								
								<p class="text">{{ $data['rekeningnummer']->body }}</p>

							</div>

						</div>
					

					</div>


					<div class="col-lg-12 push-35-0">
								
						<div class="row">


							<div class="col-lg-2 col-sm-2 col-xs-2 push-0-35">
								
								<div class="circle circle-md bg-secondary "> <span class="white"> P </span></div>	

							</div>

							<div class="col-lg-10 col-sm-10 col-xs-10 push-20">
								
								<p class="text">{{ $data['tav']->body }}</p>

							</div>

						</div>
					

					</div>
			
					<div class="col-lg-12 push-35-65">
						
						<p class="text">

							{{ $data['uitleg']->body }}

						</p>
						
					</div>

					<div class="col-lg-12 push-0-35">

						<a href="/contact" class="btn-standard bg-secondary ">PARTNER WORDEN</a>

					</div>


				</div>

			</div>

		</div>

	</section>
@stop