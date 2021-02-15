<?php

namespace App\Http\Controllers\Agent;

use App\Models\calls;
use App\Models\meetings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class MeetingsController extends Controller
{
    public function index(Request $request){
      $leads = meetings::all();
      return view('welcome',['leads'=>$leads]);

    }
    public function editScreen(Request $request){
      $lead = meetings::query()->where('id',request('id'));

      return view('welcome',['lead'=>$lead]);

    }

    public function edit(Request $request){
      $leads = meetings::all();
      $data = request();

      $edit = meetings::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return Redirect::back();

    }
    public function add(Request $request){
      $leads = meetings::all();
      $data = request();

      $add = calls::query()->create(array_merge(array_filter($data)));

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = meetings::find($request->id)->delete();


       return Redirect::back();
   }
}
