<div>
    <style>
        nav svg {
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Orders
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>OrderId</th>
                                <th>Subtotal</th>
                                <th>Item name</th>
{{--                                <th>Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>

                                    <td>{{$order->id}}</td>
                                    <td>{{$order->price}}$</td>
                                    <td>{{\App\Models\product::where('id','=',$order->product_id)->first()->name}}</td>
{{--                                    <td><a href="{{route('user.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Details</td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
