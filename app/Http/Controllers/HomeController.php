<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home.index');
    }
    public function add(Request $request)
    {
        return view('home.add');
    }
    public function edit(Request $request)
    {
        return view('home.edit');
    }
    public function delete(Request $request)
    {
        return view('home.delete');
    }
    public function show(Request $request)
    {
        return view('home.show');
    }
}
