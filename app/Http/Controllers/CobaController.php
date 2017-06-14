<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
	public function__construct()
	{
		$this->middleware('auth');
	}
    public function latihan()
    {
    	
    	return view('index');
    }
}
