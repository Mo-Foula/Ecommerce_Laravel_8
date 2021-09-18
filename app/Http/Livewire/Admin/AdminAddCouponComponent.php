<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminAddCouponComponent extends Component
{
  public $product_id;
  public $sale_percentage;

  public function addCoupon()
  {
      $coupon = new Coupon();
      $coupon->product_id = $this->product_id;
      $coupon->sale_percentage = $this->sale_percentage;
    $coupon->save();
  }
    public function render()
    {
        return view('livewire.admin.admin-add-coupon-component')->layout('layouts.base');
    }
}
