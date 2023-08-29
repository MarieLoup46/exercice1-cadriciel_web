<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exercice1Controller extends Controller
{
    public function index() {
        return view('home');
    }

    public function projects() {
        return view('projects');
    }

    public function resume() {
        return view('resume');
    }

    public function contact() {
        return view('contact');
    }

    public function contactForm(Request $request) {
        //return $request;  // retourne l'objet

        //$page = 'page Laravel';

        // data = un objet ---- page = un string
        //return view('contact-post', ['data' => $request, 'page' => $page]);

        return view('contact', ['data' => $request]);
    }
}
