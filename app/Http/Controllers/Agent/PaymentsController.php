<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
  public function index(Request $request){
    $leads = leads::all();
    return view('welcome',['leads'=>$leads]);

  }
}
