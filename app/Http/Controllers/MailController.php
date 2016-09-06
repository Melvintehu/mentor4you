<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MailController extends Controller
{
   public function lidWorden()
   {

   }

   public function contactMail(Request $request)
   {
   		$name = $request->input('naam');
	    $email = $request->input('emailadres');

	    $telefoonnummer = $request->input('telefoonnummer');
	    $bericht = $request->input('bericht');

	    $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
	        $beautymail->send('emails.contact', ['telefoonnummer' => $telefoonnummer, 'bericht' => $bericht], function($message) use ($name, $email)
	        {
	            $message
	                ->from($email, $name)
	                ->to('e.landheer@mentechmedia.nl', 'Eric Landheer')
	                ->subject('Contactbericht van ' . $name);
	        });

	        return redirect('/');
   }

   public function jongereMail(Request $request)
   {
       $name = $request->input('voornaam') . " " . $request->input('achternaam');
       $email = $request->input('emailadres');
       $birthdate = $request->input('geboortedatum');

       $telefoonnummer = $request->input('telefoonnummer');
       $bericht = $request->input('bericht');

       $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
           $beautymail->send('emails.contact', ['geboortedatum' => $birthdate, 'telefoonnummer' => $telefoonnummer, 'bericht' => $bericht], function($message) use ($name, $email)
           {
               $message
                   ->from($email, $name)
                   ->to('e.landheer@mentechmedia.nl', 'Eric Landheer')
                   ->subject('Aanmelding jongere van: ' . $name);
           });

           return redirect('/');
   }

   public function mentorMail(Request $request)
   {
       $name = $request->input('voornaam') . " " . $request->input('achternaam');
       $email = $request->input('emailadres');
       $birthdate = $request->input('geboortedatum');

       $telefoonnummer = $request->input('telefoonnummer');
       $bericht = $request->input('bericht');

       $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
           $beautymail->send('emails.contact', ['geboortedatum' => $birthdate, 'telefoonnummer' => $telefoonnummer, 'bericht' => $bericht], function($message) use ($name, $email)
           {
               $message
                   ->from($email, $name)
                   ->to('e.landheer@mentechmedia.nl', 'Eric Landheer')
                   ->subject('Aanmelding mentor van: ' . $name);
           });

           return redirect('/');   
   }
}
