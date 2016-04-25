<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hosting;

class HostingController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$hosting = Hosting::all();
    	return view('hosting.index', compact('hosting'));
    }

    public function create()
    {
    	return view('hosting.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'category'      => 'required|min:2',
    		'name'		    => 'required',
    		'monthly'	    => 'required|integer',
    		'semi_annually'	=> 'required|integer',
    		'annually'	    => 'required|integer',
    		'space'	        => 'required',
    		'bandwith'	    => 'required',
    		'addon_domain'	=> 'required',
    		'email_hosting'	=> 'required',
    		'railgun'	    => 'required',
    		'backup'	    => 'required',
    		'link'		    => 'required'
    	]);

    	Hosting::create($request->all());
    	return redirect('hosting')->with(['success' => 'Data Berhasil Di Tambahkan']);
    }
}
