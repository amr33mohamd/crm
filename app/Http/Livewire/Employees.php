<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\user;

class Employees extends Component
{
  public $employees;

  public function render()
  {
    $user = Auth::user();

    $this->employees = $user->employees;

    // $leads = tasks::all();
    return view('livewire.employees');
  }


    public function add( $request){
      $data = $request;
      $user = Auth::user();

      $add = user::query()->create(array_merge(array_filter($data),['follow_id'=>$user->id]));


      $this->reset();
      return $data;
    }


}
