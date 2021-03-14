<?php

namespace App\Http\Controllers\Agent;

use App\Models\tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\documents;
class SettingsController extends Controller
{
    public function index(Request $request){
      $leads = tasks::all();
      return view('Agent.Settings.Settings',['leads'=>$leads]);

    }
    public function editScreen(Request $request){
      $lead = tasks::query()->where('id',request('id'));

      return view('Agent.Marketing.Marketing',['lead'=>$lead]);

    }

    public function edit(Request $request){
      $leads = tasks::all();
      $data = request();

      $edit = tasks::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return Redirect::back();

    }
    public function add(Request $request){
      $leads = tasks::all();
      $data = request();

      $add = tasks::query()->create(array_merge(array_filter($data)));

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = tasks::find($request->id)->delete();


       return Redirect::back();
   }
}
