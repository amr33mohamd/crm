<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\contacts;
use App\Http\Controllers\Controller;
class ContactsController extends Controller
{
    public function index(Request $request){
      $leads = contacts::all();
      return view('welcome',['leads'=>$leads]);

    }
    public function editScreen(Request $request){
      $lead = contacts::query()->where('id',request('id'));

      return view('welcome',['lead'=>$lead]);

    }

    public function edit(Request $request){
      $leads = contacts::all();
      $data = request();

      $edit = contacts::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return Redirect::back();

    }
    public function add(Request $request){
      $leads = contacts::all();
      $data = request();

      $add = contacts::query()->create(array_merge(array_filter($data)));

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = contacts::find($request->id)->delete();


       return Redirect::back();
   }
}
