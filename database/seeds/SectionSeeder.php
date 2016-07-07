<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        //homepage
         	// maken van alle setions op de homepage
			        DB::table('sections')->insert([
			                'title' => 'Aanmelden',
			                'body' => 'Geen tekst',
			                'page_id' => '1',
			            ]);
			        DB::table('sections')->insert([
			                'title' => 'Ik zoek een mentor',
			                'body' => 'Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus. Suspendisse volutpat, quam eu. ',
			                'page_id' => '1',
			            ]);
			        DB::table('sections')->insert([
			                'title' => 'Aanmelden als mentor',
			                'body' => 'Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus. Suspendisse volutpat, quam eu. ',
			                'page_id' => '1',
			            ]);
			        DB::table('sections')->insert([
			                'title' => 'Resultaten',
			                'body' => 'Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus. Suspendisse volutpat, quam eu. ',
			                'page_id' => '1',
			            ]);
			        DB::table('sections')->insert([
			                'title' => 'Actueel',
			                'body' => 'Geen tekst',
			                'page_id' => '1',
			            ]);
			        DB::table('sections')->insert([
			                'title' => 'Partners',
			                'body' => 'Geen tekst',
			                'page_id' => '1',
			            ]);

		//over ons
         	// maken van alle setions op de over ons pagina

			        // WAT IS MENTOR 4 YOU
			        DB::table('sections')->insert([
			                'title' => 'Wat is mentor4you',
			                'body' => 'geen tekst',
			                'page_id' => '2',
			            ]);
				        DB::table('sections')->insert([
				                'title' => 'Wat doen wij?',
				                'body' => 'Morbi elementum, quam ut suscipit elementum, risus libero tincidunt est, auctor imperdiet elit felis vel turpis. Ut ac nulla eget neque tincidunt rutrum. Sed varius dictum elit, ac scelerisque lorem pharetra eu. Ut pellentesque, diam vitae consequat elementum, ligula ipsum viverra elit,',
				                'page_id' => '2',
				            ]);
				        DB::table('sections')->insert([
				                'title' => 'Voor wie?',
				                'body' => 'Morbi elementum, quam ut suscipit elementum, risus libero tincidunt est, auctor imperdiet elit felis vel turpis. Ut ac nulla eget neque tincidunt rutrum. Sed varius dictum elit, ac scelerisque lorem pharetra eu. Ut pellentesque, diam vitae consequat elementum, ligula ipsum viverra elit,',
				                'page_id' => '2',
				            ]);
				        DB::table('sections')->insert([
				                'title' => 'Wat is ons doel?',
				                'body' => 'Morbi elementum, quam ut suscipit elementum, risus libero tincidunt est, auctor imperdiet elit felis vel turpis. Ut ac nulla eget neque tincidunt rutrum. Sed varius dictum elit, ac scelerisque lorem pharetra eu. Ut pellentesque, diam vitae consequat elementum, ligula ipsum viverra elit,',
				                'page_id' => '2',
				            ]);
				       	DB::table('sections')->insert([
				                'title' => 'Waar staan wij in de toekomst?',
				                'body' => 'Morbi elementum, quam ut suscipit elementum, risus libero tincidunt est, auctor imperdiet elit felis vel turpis. Ut ac nulla eget neque tincidunt rutrum. Sed varius dictum elit, ac scelerisque lorem pharetra eu. Ut pellentesque, diam vitae consequat elementum, ligula ipsum viverra elit,',
				                'page_id' => '2',
				            ]);

				    // HET TEAM
				    DB::table('sections')->insert([
			                'title' => 'Het team',
			                'body' => 'geen tekst',
			                'page_id' => '2',
			            ]);   

				    // BEN JE ENTHOUSIAST GEWORDEN?
				     DB::table('sections')->insert([
			                'title' => 'Ben je enthousiast geworden na het zien van onze website?',
			                'body' => 'Meld je dan nu aan als mentor of jongere door op één van de onderstaande knoppen te drukken',
			                'page_id' => '2',
			            ]); 

		//Actueel
         	// maken van alle setions op de actueel pagina

			         // Actueel
			        DB::table('sections')->insert([
			                'title' => 'Actueel',
			                'body' => 'geen tekst',
			                'page_id' => '3',
			            ]);

		//Actueel
         	// maken van alle sections op de resultaten pagina

			         // Resultaten
			        DB::table('sections')->insert([
			                'title' => 'Resultaten',
			                'body' => 'geen tekst',
			                'page_id' => '4',
			            ]);

		//Steun ons
         	// maken van alle sections op de steun ons pagina

			         // Steun ons
			        DB::table('sections')->insert([
			                'title' => 'Steun ons',
			                'body' => 'geen tekst',
			                'page_id' => '5',
			            ]);
			        DB::table('sections')->insert([
				                'title' => 'Non-profit organisatie',
				                'body' => 'Morbi elementum, quam ut suscipit elementum, risus libero tincidunt est, auctor imperdiet elit felis vel turpis. Ut ac nulla eget neque tincidunt rutrum. Sed varius dictum elit, ac scelerisque lorem pharetra eu. Ut pellentesque, diam vitae consequat elementum, ligula ipsum viverra elit, TEST',
				                'page_id' => '5',
				            ]);
			        DB::table('sections')->insert([
				                'title' => 'Help en doneer',
				                'body' => 'Morbi elementum, quam ut suscipit elementum, risus libero tincidunt est, auctor imperdiet elit felis vel turpis. Ut ac nulla eget',
				                'page_id' => '5',
				            ]);
			        DB::table('sections')->insert([
				                'title' => 'Rekeningnummer',
				                'body' => 'NL12 INGB 00012345678',
				                'page_id' => '5',
				            ]);
			        DB::table('sections')->insert([
				                'title' => 'T.A.V.',
				                'body' => 'T.A.V. Karin oldenbruger, stichting Spinn',
				                'page_id' => '5',
				            ]);
			        DB::table('sections')->insert([
				                'title' => 'Uitleg doneer grijs vlak',
				                'body' => 'Morbi elementum, quam ut suscipit elementum, risus libero tincidunt est, auctor imperdiet elit felis vel turpis. Ut ac nulla eget',
				                'page_id' => '5',
				            ]);

		//Contact
         	// maken van alle sections op de contact pagina

			         // Contact
			        DB::table('sections')->insert([
			                'title' => 'Contact',
			                'body' => 'Morbi elementum, quam ut suscipit elementum, risus libero tincidunt est, auctor imperdiet elit felis vel turpis. Ut ac nulla eget neque tincidunt rutrum. Sed varius dictum elit, ac scelerisque lorem pharetra eu. Ut pellentesque, diam vitae consequat elementum, ligula ipsum viverra elit, sed pharetra nunc purus sit amet dolor. Nulla facilisi. Aliquam rutrum orci ut turpis laoreet, eget convallis tellus ornare. Maecenas at magna quis turpis posuere varius.',
			                'page_id' => '6',
			            ]);
			        DB::table('sections')->insert([
				                'title' => 'U kan met ons contact opnemen via het onderstaande formulier',
				                'body' => 'U kan met ons contact opnemen via het onderstaande formulier',
				                'page_id' => '6',
				            ]);
			        DB::table('sections')->insert([
				                'title' => 'Onze vestiging',
				                'body' => 'Rodenburg 1b Leek',
				                'page_id' => '6',
				            ]);

		//Slider
         	// maken van alle sections op de slider pagina
			        	DB::table('sections')->insert([
			                'title' => 'Mentor en leerling SLIDE 1',
			                'body' => 'Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus. Suspendisse volutpat, quam eu. ',
			                'page_id' => '7',
			            ]);
			            DB::table('sections')->insert([
			                'title' => 'Mentor en leerling SLIDE 2',
			                'body' => 'Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus. Suspendisse volutpat, quam eu. ',
			                'page_id' => '7',
			            ]);
			            DB::table('sections')->insert([
			                'title' => 'Mentor en leerling SLIDE 3',
			                'body' => 'Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus. Suspendisse volutpat, quam eu. ',
			                'page_id' => '7',
			            ]);
			            DB::table('sections')->insert([
			                'title' => 'Mentor en leerling SLIDE 4',
			                'body' => 'Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus. Suspendisse volutpat, quam eu. ',
			                'page_id' => '7',
			            ]);
    }
}
