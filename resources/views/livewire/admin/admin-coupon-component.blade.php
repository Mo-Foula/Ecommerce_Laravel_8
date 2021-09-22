<div>
<div style="width: 95%; margin: auto; border: solid 3px #ff2832; margin-top: 10px; margin-bottom: 10px;">
  <table class="table table-striped" style="width: 95%; margin:auto; margin-top: 10px; margin-bottom: 10px;">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Product id</th>
        <th scope="col">Sale Percentage</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($coupons as $coupon)
      <tr>
        <th scope="row">{{$coupon->id}}</th>
        <td>{{$coupon->product_id}}</td>
        <td>{{$coupon->sale_percentage}}</td>
        <td><a href="#" wire:click.prevent="deleteCoupon({{$coupon->id}})">Delete</a></td>
      </tr>
    </tbody>
    @endforeach
  </table>
  {{$coupons->links()}}
</div>
  <a href="{{route('admin.addcoupon')}}" style="color: #ff2832;"><center><button style="margin-bottom: 5px; margin-top: 5px;">Add Coupon</button></center></a>
</div>
