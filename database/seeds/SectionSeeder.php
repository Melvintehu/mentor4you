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

			            // maken van alle sections op de aanmelden als jongere pagina

			        	
			            DB::table('sections')->insert([
			                'title' => 'Ik zoek een mentor',
			                'body' => 'Mentor4You is er voor jongeren tussen de 12* en 23 jaar (*vanaf groep 8). Er gebeurt veel in deze jaren, je moet beslissingen nemen rondom school, resultaten halen, je wilt misschien een bijbaantje zoeken, je ontmoet nieuwe mensen, soms is de band met ouders lastiger, weet je niet goed wat je wel en niet wilt, of juist weet je wel wat je wilt en lukt alles niet zo goed. Soms helpt de omgeving niet mee, hebben je ouders problemen en/of zijn er weinig mensen in je omgeving waar jij een beroep op kunt doen. Mentor4You kan jou helpen met het uitzoeken van wat jij wilt, de dingen wat helderder krijgen, kijken wat bij jou wel werkt en ook kunnen we ondersteuning bieden bij de stappen die gezet moeten worden. Belangrijk is dat jij een vraag hebt, weet wat je anders wilt of weet wat niet zo goed gaat. 

								We werken met vrijwilligers, zij maken speciaal tijd voor je vrij, daarom is het ook belangrijk dat jij wel op dat steuntje in de rug zit te wachten. Hulp en ondersteuning vragen is niet altijd makkelijk of leuk, maar soms is het fijn als er iemand voor jou is, jou een steuntje in de rug geeft. Je hoeft het namelijk niet alleen te doen. Ook kan het soms juist heel leuk zijn, dat er iemand voor jou is. Omdat er een klik is tussen jou en de vrijwilliger, kun je ook leuke dingen samen doen, bijvoorbeeld om een succesje te vieren!
',
			                'page_id' => '32',
			            ]);
			            DB::table('sections')->insert([
			                'title' => 'tekst boven aanmeldformulier',
			                'body' => 'Je kunt jezelf aanmelden door het contactformulier op de website in te vullen. Dit kun je ook samen met je ouders of een professional doen. Met sommige organisaties hebben we een samenwerkingsafspraak, zij kunnen dan samen met jou een aanmeldformulier invullen en mailen dit ons. Na je aanmelding nemen wij contact met jou op en bespreken we de vervolgstappen, samen met jou en zo nodig met 1 van je ouders/verzorgers. Dit doen we als je tussen de 12 en 16 jaar bent.',
			                'page_id' => '32',
			            ]);

			            





    }
}
