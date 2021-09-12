<div>
  <div style="width: 90%; margin: auto; background-color: white; margin-top: 1em; height: 500px;">
    <div style="background-color: #f2f2f2">
      <h5 style=" padding: 0.5em; text-align: center; color: rgb(232, 90, 58);">Add discounts on products</h5>
    </div>
    <div style="border: solid 3px #ff2832;">
    <form enctype="multipart/form-data" wire:submit.prevent="addCoupon"  style="padding: 0.5em; margin: 1em; ">
<label for="ProductName" style="font-size: 1.5em; padding: 0.5em; margin: 1em; color: rgb(232, 90, 58);">Product ID :  </label>
<input type="number" placeholder="Product ID" style="padding: 0.5em; margin: 1em;" wire:model="product_id"><br>
<label for="DiscountPercentage" style=" padding: 0.5em; margin: 1em; font-size: 1.5em; color: rgb(232, 90, 58);">Discount percentage : </label>
<input type="number" min="0"; max="100"; style="padding: 0.5em; margin: 1em;" placeholder="From 0 to 100" wire:model="sale_percentage"><br><br>
<button type="submit" style="padding: 0.5em; margin-left: 3em; color: rgb(232, 90, 58);">Submit</button>
</form>
<center><a href="{{route('admin.coupon')}}"><button style="padding: 0.5em; margin: 3em; color: rgb(232, 90, 58);">Back to coupon list</button></a><center>
  </div>
</div>
</div>
