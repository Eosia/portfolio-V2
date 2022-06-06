<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $title = "Accueil";
        $description = "Accueil";
        $canonical = "https://www.eosia.dev/";

        $data = [
            'title'=> $title,
            'description' => $description,
            'canonical' => $canonical,
        ];

        return view('home.index', $data);
    }

}
