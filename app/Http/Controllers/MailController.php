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
}
