<?php

namespace App\Http\Livewire\User;
use App\Models\User as Users;

use Livewire\Component;

class UserEditProfile extends Component
{
  public $name;
  public $email;
  public $password;
  public $utype;
  public function mount($id)
  {
    $users = Users::where('id',$id)->first();
    $this->id = $users->id;
    $this->name = $users->name;
    $this->email = $users-> email;
    $this->password = $users->password;
    $this->utype = $users->utype;
  }
  public function updateUser()
  {
    $users =  Users::where('id',$this->id)->get();
    echo "$users";
    $users->name = $this->name;
    $users->email = $this->email;
    $users->password = $this->password;
    $users->utype = $this->utype;
    // $users->save();
  }
    public function render()
    {
      $users = Users::where('id',$this->id)->get();
        return view('livewire.user.user-edit-profile',['users'=>$users])->layout('layouts.base');
    }
}
