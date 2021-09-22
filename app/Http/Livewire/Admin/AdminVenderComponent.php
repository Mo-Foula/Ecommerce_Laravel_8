<?php

namespace App\Http\Livewire\Admin;

use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminVenderComponent extends Component
{
public function delete($id){
DB::table('users')->where('id',$id)->delete();
session()->flash('delete','Record deleted successfully');
}
    public function render()
    {
        $Vendors=User::where('utype','=','VEN')->get();
//        $Vendors=User::all();
        return view('livewire.admin.admin-vender-component',['Vendors'=>$Vendors])->layout('layouts.base');
    }
}
