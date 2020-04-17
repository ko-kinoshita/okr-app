<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('objective')->get(); 
        return view('home.index',['items'=>$items]);
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
