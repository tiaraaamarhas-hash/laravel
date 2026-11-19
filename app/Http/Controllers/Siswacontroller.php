<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siswacontroller extends Controller
{
    public function index() 
	{
		return view('kelas.index');
	}
}
