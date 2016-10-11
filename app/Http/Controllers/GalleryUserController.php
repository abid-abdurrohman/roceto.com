<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Gallery;

use App\Model\Event;


class GalleryUserController extends Controller
{
    public function index()
    {
    	$events = Event::all();
    	$photos = Gallery::all();
    	return view('gallery.gallery', compact('events', 'photos'));
    }

}
