<?php

namespace App\Http\Controllers;

use App\EloquentModel\OKR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $objects = DB::table('objective')->get();
        $results = DB::table('key_result')->get();
        $user = Auth::user();
        $param = ['user' => $user];
        return view('home.index',
            ['objects'=>$objects],['results'=>$results],[$param]);
    }

    public function add(Request $request)
    {
        return view('home.add');
    }

    public function create(Request $request)
    {
        $info = new OKR;
        $form = $request->all();
        unset($form['_token']);
        $info->fill($form)->save();

        return redirect('/');
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
