<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\User;
class Adminaddvendorcomponent extends Component
{
    public $utype;
    public $name ;
    public $email;
    public $password ;
    protected $rules=[
        'name'=>'required|min:3|max:20',
        'email'=>'required|email',
        'password'=>'required'

        ];
    public function submit(){

//        $validatedata=$this->validate();
        $validatedata['utype']='VEN';
//       $vendor= User::
//        create($validatedata);

       $type=new User();
        $type->name =$this->name;
        $type->email =$this->email;
        $type->password =Hash::make($this->password);
        $type->utype ='VEN';
        $type->save();

       session()->flash('success','Vendor is added successfully');

    }
    public function render()
    {
        return view('livewire.admin.adminaddvendorcomponent')->layout('layouts.base');
    }
}
