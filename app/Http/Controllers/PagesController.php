<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Controller for Pages
     */
    public function getIndex()
    {
    	return view('pages.welcome');	
    }

    public function getContact()
    {
    	return view('pages.contact');
    }

    public function getAbout()
    {
    	$firstname 	= 'Mher';
    	$lastname 	= 'Margaryan';
    	$full = $firstname . ' ' . $lastname;
    	return view('pages.about')->with('fullname', $full);	
    }
}
