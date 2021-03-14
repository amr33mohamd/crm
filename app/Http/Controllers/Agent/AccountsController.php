<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\accounts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\lead_status;
use App\Models\hear_about_us;
use App\Models\nationality;
use App\Models\education_qualifications;
use App\Models\industry;
use App\Models\currencies;
use App\Models\traffic_source;
use App\Models\traffic_mediums;
class AccountsController extends Controller
{
  public function index(Request $request){
    $user = Auth::user();
    $leads = $user->accounts;

    return view('Agent.sales.accounts.accounts',['leads'=>$leads]);


  }
  public function editScreen(Request $request){
    $lead = accounts::query()->where('id',request('id'))->first();
    $user = Auth::user();
     $statuses = lead_status::all();
$hear_about_uses = hear_about_us::all();
$nationalities = nationality::all();
$educations = education_qualifications::all();
$industries = industry::all();
$currancies = currencies::all();
$sources = traffic_source::all();
$mediums = traffic_mediums::all();
return view('Agent.sales.accounts.NewAccount',['lead'=>$lead,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'currancies'=>$currancies,'type'=>'edit','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities]);

  }
  public function addScreen(Request $request){
    $lead = new accounts;
    $user = Auth::user();
     $statuses = lead_status::all();
     $hear_about_uses = hear_about_us::all();
     $nationalities = nationality::all();
     $educations = education_qualifications::all();
     $industries = industry::all();
     $currancies = currencies::all();
     $sources = traffic_source::all();
     $mediums = traffic_mediums::all();
    return view('Agent.sales.accounts.NewAccount',['lead'=>$lead,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'currancies'=>$currancies,'type'=>'add','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities]);

  }
  public function edit(Request $request){
    $leads = accounts::all();
    $data = $request->all();
    unset($data['_token']);

    $edit = accounts::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

    return redirect('/accounts');

  }
  public function add(Request $request){
    $leads = accounts::all();
    $data = $request->all();
    $data['user_id'] = Auth::user()->id;
    $add = accounts::query()->create(array_merge(array_filter($data)));
    return redirect('/accounts');
  }
  public function delete(Request $request){
     $auth = Auth::user();

     $leads = accounts::find($request->id)->delete();


     return redirect('/accounts');
 }
}
