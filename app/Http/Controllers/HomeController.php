<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EloquentModel\Objective;
use App\EloquentModel\Infomation;
use App\EloquentModel\Key_result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\EloquentModel\Group_objective;
use App\EloquentModel\Group_key_result;
use App\EloquentModel\Individual_objective;
use App\EloquentModel\Individual_key_result;

class HomeController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $objects = DB::table('objective')->get();
        $results = DB::table('key_result')->get();
        $group_objectives = DB::table('group_objective')->get();
        $group_key_results = DB::table('group_key_result')->get();
        $individual_objectives = DB::table('individual_objective')->get();
        $individual_key_results = DB::table('individual_key_result')->get();

        $user = Auth::user();
        $param = ['user' => $user];
        return view('home.index',compact('objects','results','group_objectives','group_key_results','individual_objectives','individual_key_results'));
    }

    public function add(Request $request)
    {
        return view('home.add');
    }

    public function create(Request $request)
    {
        $objective = new Objective;
        $key_result = new Key_result;
        $group_objective = new Group_objective;
        $group_key_result = new Group_key_result;
        $individual_objective = new Individual_objective;
        $individual_key_result = new Individual_key_result;
        $form = $request->all();
        unset($form['_token']);
        $objective->fill($form)->save();
        $key_result->fill($form)->save();
        $group_objective->fill($form)->save();
        $group_key_result->fill($form)->save();
        $individual_objective->fill($form)->save();
        $individual_key_result->fill($form)->save();

        return redirect('/');
    }

    public function store(Request $request)
    {
        $info = new Infomation;
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
