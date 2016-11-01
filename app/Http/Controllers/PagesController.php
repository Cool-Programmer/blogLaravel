<?php

namespace App\Http\Controllers;

use App\Post;


class PagesController extends Controller
{
    /**
     * Controller for Pages
     */
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
    	return view('pages.welcome')->with('posts', $posts);	
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
