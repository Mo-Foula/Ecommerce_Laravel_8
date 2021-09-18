<?php

namespace App\Http\Livewire\User;
use App\Models\User as Users;
use Illuminate\Http\Request;

use Livewire\Component;

class UserEditProfile extends Component
{
  public $idd;
  public $name;
  public $email;
  public $password;
  public function mount($id)
  {
    $users = Users::where('id',$id)->first();
    $this->idd = $id;
    $this->name = $users->name;
    $this->email = $users-> email;
    $this->password = $users->password;
  }
  public function updateUser()
  {
    $users = Users::find($this->idd);
    $users->name = $this->name;
    $users->email = $this->email;
    $users->password = $this->password;
    $users->save();
    return view("livewire.home-component")->layout("layouts.base");
  }
    public function render()
    {
      $users = Users::where('id',$this->idd)->get();
        return view('livewire.user.user-edit-profile',['users'=>$users])->layout('layouts.base');
    }
}
