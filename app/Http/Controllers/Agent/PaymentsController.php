<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\leads;
class PaymentsController extends Controller
{
  public function index(Request $request){
    $leads = leads::all();
    return view('Agent.payments.payments',['leads'=>$leads]);

  }
}
