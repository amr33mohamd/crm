<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\accounts;
use App\Http\Controllers\Controller;
class AccountsController extends Controller
{
    public function index(Request $request){
      $leads = accounts::all();
      return view('welcome',['leads'=>$leads]);

    }
    public function editScreen(Request $request){
      $lead = accounts::query()->where('id',request('id'));

      return view('welcome',['lead'=>$lead]);

    }

    public function edit(Request $request){
      $leads = accounts::all();
      $data = request();

      $edit = accounts::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return Redirect::back();

    }
    public function add(Request $request){
      $leads = accounts::all();
      $data = request();

      $add = accounts::query()->create(array_merge(array_filter($data)));

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = accounts::find($request->id)->delete();


       return Redirect::back();
   }
}
