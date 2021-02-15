<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class AffiliateController extends Controller
{
  public function index(Request $request){
    $leads = User::query()->where('invited_by',null)->with('followers.followers')->get();
    return response()->json($leads);
  }


}
