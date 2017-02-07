<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function accueil()
    {
      return view('accueil');
    }


    public function fonctionnalites()
    {
      return view('fonctionnalites');
    }


    public function contact()
    {
      return view('contact');
    }


    public function login()
    {
      return view('login');
    }
}
