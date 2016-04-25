<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hosting;
use App\Domain;

class FrontController extends Controller
{
    public function index()
    {
    	return view('front.index');
    }

    public function show($slug)
    {
    	if ($slug == 'pelajar') {
    		$slug = 'pelajar';
    	} elseif ($slug == 'personal') {
    		$slug = 'personal';
    	} elseif ($slug == 'extra') {
    		$slug = 'extra';
    	} else {
    		return redirect('/');
    	}
    	
    	$hosting = Hosting::where('category', '=', $slug)->get();
    	return view('front.show', compact('hosting'));
    }

    public function domain($slug)
    {
        if ($slug == 'indonesia') {
            $slug = 'indonesia';
        } elseif ($slug == 'internasional') {
            $slug = 'internasional';
        } elseif ($slug == 'persyaratan-domain-id') {
            return view('front.persyaratan');
        } else {
            return redirect('/');
        }

        $domain = Domain::where('category', '=', $slug)->get();
        return view('front.domain', compact('domain', 'slug'));
    }

    public function company()
    {
        return view('front.pst');
    }

}
