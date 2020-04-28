<?php

namespace App\Http\Controllers;

use App\EloquentModel\OKR;
use Illuminate\Http\Request;
use App\Http\Requests\okrRequest;
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

    public function post(okrRequest $request)
    {
        return view('/',['msg'=>'正しく入力されました']);
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
        $validate_rule = [
            'objective.required' => '必ず入力してください',
            'key_result.required' => '必ず入力してください',
        ];
        $this->validate($request, $validate_rule);

        $info = new OKR;
        $form = $request->all();
        unset($form['_token']);
        $info->fill($form)->save();

        return redirect('/',['msg'=>'入力しました']);
    }

    public function edit(Request $request)
    {
        return view('home.edit');
    }

    public function delete(Request $request)
    {
        OKR::find($request->id)->delete();
        return redirect('/');
    }

    public function show(Request $request,$id)
    {
        $okr = DB::table('_o_k_r')->get();
        $user = Auth::user();
        $param = ['user' => $user];
        return view('home.show',['okrs'=>$okr] ,['id'=>$id]);
    }
}
