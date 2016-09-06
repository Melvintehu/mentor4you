<!-- background -->
<div class="header"> 
	
<!-- Container voor centreren van content -->
	
		<div class="container-fluid">
			
		<!-- Row wrapper voor content -->
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 main-logo">

					<img class="main-logo" src='../images/mentor4you-logo.jpg' />

				</div>
			<!-- Columns voor content indelingen -->

			<!-- navigatie -->
		
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
					
					<div class="placeholder-nav"> 

					<!-- navbar -->
							<nav class="navbar navbar-default navbar-right"> 

							  <div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">

							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

							        <span class="sr-only">Toggle navigation</span>

							        <span class="icon-bar"></span>

							        <span class="icon-bar"></span>

							        <span class="icon-bar"></span>

							      </button>
							    
							    </div>

							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							      <ul class="nav navbar-nav">

							        <li class="{{ active_class(if_route(['home']) || if_uri(['/'])) }}"><a href="{{ URL::to('/') }}"><a href="/">HOME <span class="sr-only">(current)</span></a></li>

							        <li><a href="{{ active_class(if_route(['over-ons']) || if_uri(['over-ons'])) }}"><a href="{{ URL::to('over-ons') }}">OVER ONS</a></li>

							       	<li><a href="{{ active_class(if_route(['actueel']) || if_uri(['actueel'])) }}"><a href="{{ URL::to('actueel') }}">ACTUEEL</a></li>

							       	<!-- <li><a href="/behaalde-resultaten">RESULTATEN</a></li> -->

							       	<li><a href="{{ active_class(if_route(['steun-ons']) || if_uri(['steun-ons'])) }}"><a href="{{ URL::to('steun-ons') }}">STEUN ONS</a></li>

							       	<li><a href="{{ active_class(if_route(['contact']) || if_uri(['contact'])) }}"><a href="{{ URL::to('contact') }}">CONTACT</a></li>

							      </ul>
							      
							    </div><!-- /.navbar-collapse -->

							  </div><!-- /.container-fluid -->

							</nav>

						<!-- end of navbar -->
					</div>
				
				</div>

			</div>

		</div>

</div>


<section class="container-fluid space-inside-sides-xl bg-secondary">

	<div class="row">

		<div class="col-lg-4 space-inside-sm right">

				<p class="text-color-light font-xs right">
				
					<span class="bold text-color-main space-inside-left-md space-inside-right-sm "> T </span> 06-24967211
		
				</p>
		
				<p class="text-color-light font-xs right">
		
					<span class="bold text-color-main space-inside-left-md space-inside-right-sm"> E </span> 
					
					info@mentor4you.nl
				
				</p>
			
		</div>

	</div>

</section>


