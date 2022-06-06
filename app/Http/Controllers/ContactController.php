<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    return view('home.index', $data);
    }


}
