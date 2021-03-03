<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\leads;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LeadsController extends Controller
{
    public function index(Request $request){
      $user = Auth::user();
      $leads = $user->leads;


      return view('welcome',['lead'=>$lead]);


    }
    public function editScreen(Request $request){
      $lead = leads::query()->where('id',request('id'));
      $user = Auth::user();
      return;

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

      $add = leads::query()->create(array_merge(array_filter($data)));

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = leads::find($request->id)->delete();


       return Redirect::back();
   }
}
