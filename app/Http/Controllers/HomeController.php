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
        $okr = DB::table('_o_k_r')->get();
        $user = Auth::user();
        $param = ['user' => $user];
        return view('home.index',['okrs'=>$okr]);
    }

    public function add(Request $request)
    {
        $id = null;
        return view('home.add',['id'=>$id]);
    }



    public function add_child(Request $request,$id)
    {
        $okr = DB::table('_o_k_r')->get();

        return view('home.add_child',['id'=>$id],['okrs'=>$okr]);
    }

    public function add_child_update(Request $request)
    {
        $info = new OKR;
        $form = $request->all();
        unset($form['_token']);
        $info->fill($form)->save();

        return redirect('/');
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

    public function show(Request $request,$id)
    {
        $okr = DB::table('_o_k_r')->get();
        $user = Auth::user();
        $param = ['user' => $user];
        return view('home.show',['okrs'=>$okr] ,['id'=>$id]);
    }
}
