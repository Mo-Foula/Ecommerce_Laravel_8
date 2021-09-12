<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\withPagination;
use App\Models\Coupon;

class AdminCouponComponent extends Component
{
  use withPagination;
  public function deleteCoupon($id){
    $coupon = Coupon::find($id);
    $coupon->delete();

  }
    public function render()
    {
      $coupons = Coupon::paginate(10);
        return view('livewire.admin.admin-coupon-component',['coupons'=>$coupons])->layout('layouts.base');
    }
}
