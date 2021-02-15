<?php

namespace App\Http\Controllers\Agent;

use App\Models\opportunities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class OpportunitiesController extends Controller
{
    public function index(Request $request){
      $leads = opportunities::all();
      return view('welcome',['leads'=>$leads]);

    }
    public function editScreen(Request $request){
      $lead = opportunities::query()->where('id',request('id'));

      return view('welcome',['lead'=>$lead]);

    }

    public function edit(Request $request){
      $leads = opportunities::all();
      $data = request();

      $edit = opportunities::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return Redirect::back();

    }
    public function add(Request $request){
      $leads = opportunities::all();
      $data = request();

      $add = opportunities::query()->create(array_merge(array_filter($data)));

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = opportunities::find($request->id)->delete();


       return Redirect::back();
   }
}
