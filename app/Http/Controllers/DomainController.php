<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Domain;

class DomainController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$domain = Domain::all();
    	return view('domain.index', compact('domain'));
    }

    public  function create()
    {
    	return view('domain.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'category'     => 'required|min:2',
			'name'         => 'required',
			'registration' => 'required|integer',
			'renewal'      => 'required|integer',
			'transfer'     => 'required|integer'
    	]);

    	Domain::create($request->all());
    	return redirect('domain')->with(['success' => 'Domain Berhasil Di Tambahkan']);
    }
}
