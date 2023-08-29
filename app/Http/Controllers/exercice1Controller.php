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
        return view('contact', ['data' => $request]);
    }
}
