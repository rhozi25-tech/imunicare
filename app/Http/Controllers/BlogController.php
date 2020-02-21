<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
    	return view("blog/home");
    }

    public function show($id)
    {
    	$username = DB::table('biodata_mahasiswa')->get();
    	 
    	return view('blog/single', ['blog' => $id, 'user' => $username]);
    }
}
