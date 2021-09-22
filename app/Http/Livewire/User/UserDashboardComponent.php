<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User as Users;
use Illuminate\Support\Str;

class UserDashboardComponent extends Component
{
  public $name;
  public $email;
  public $password;
  public $utype;
    public $idd;

  public function mount()
  {
    $users = Users::where('id',Auth::user()->id)->first();
    $this->idd = $users->id;
    $this->name = $users->name;
    $this->email = $users-> email;
    $this->password = $users->password;
    $this->utype = $users->utype;
  }
    public function render()
    {
       $users = Users::where('id',$this->idd)->get();
        return view('livewire.user.user-dashboard-component',['users'=>$users])->layout('layouts.base');
    }
}
