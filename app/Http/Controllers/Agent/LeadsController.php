<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\leads;
use App\Http\Controllers\Controller;
class LeadsController extends Controller
{
    public function index(Request $request){
      $leads = leads::all();
      return view('welcome',['leads'=>$leads]);

    }

    public function edit(Request $request){
      $leads = leads::all();
      $data = request();

      $edit = leads::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return Redirect::back();

    }
    public function add(Request $request){
      $leads = leads::all();
      $data = request();

      $add = leads::query()->where('id',request('id'))->create(array_merge(array_filter($data)));

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = leads::find($request->id)->delete();


       return Redirect::back();
   }
}
