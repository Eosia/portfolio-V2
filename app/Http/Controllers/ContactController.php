<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //

    // page contact avec formulaire de contact
    public function index()
    {
    $title = "Contact";
    $description = "Me contacter";
    $canonical = "https://www.eosia.dev/";

    $data = [
    'title'=> $title,
    'description' => $description,
    'canonical' => $canonical,
    ];

        return view('contact.index', $data);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function send(Request $request)
    {

        $details = $request->validate([
            'name' => 'required|min:2|string',
            'email' => 'email|required|min:4',
            'subject' => 'required|min:4',
            'message' => 'required|min:6',
            'captcha' => 'required|captcha'
        ],
            ['captcha.captcha'=>'Captcha Invalide !']
        );

        $ip = $request->ip();

        $success = 'Votre message a bien été envoyé.';

        Mail::to('hello@eosia.dev')->send(new ContactMail($details, $ip));

        return redirect()->route('contact')->withSuccess($success);

    }


}
