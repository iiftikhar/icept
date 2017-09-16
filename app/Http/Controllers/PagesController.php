<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHomePage()
    {
      return view('home');
    }
    public function getAboutPage()
    {
      return view('about');
    }
    public function getContactPage()
    {
      return view('contact');
    }
}
