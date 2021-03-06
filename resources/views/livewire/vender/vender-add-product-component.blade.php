<div>
    <div class="container" style='padding:30px 0;'>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('vender.products')}}" class="btn btn-success pull-right">All
                                    product</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Name" class="form-contol input-md"
                                           wire:model="name" wire:keyup="generateSlug"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label"> Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Description"
                                              wire:model="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Regular Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Regular Price" class="form-contol input-md"
                                           wire:model="regular_price"/>
                                </div>
                            </div>

                            {{--                            <div class="form-group">--}}
                            {{--                                <label class="col-md-4 control-label">Sale Price</label>--}}
                            {{--                                <div class="col-md-4">--}}
                            {{--                                    <input type="text" placeholder="Sale Price" class="form-contol input-md" wire:model="sale_price"/>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">InStock</option>
                                        <option value="outstock">OutStock</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Quantity" class="form-contol input-md"
                                           wire:model="quantity"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image"/>
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            @if(Auth::user()->utype ==='ADM')
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Vendor ID</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Vendor ID" class="form-contol input-md"
                                               wire:model="vendor_id"/>
                                    </div>
                                </div>
                            @elseif(Auth::user()->utype ==='VEN')
                                <div class="form-group" style="opacity: 0;">
                                    <label class="col-md-4 control-label">Vendor ID</label>
                                    <div class="col-md-4">
                                        <input type="text" disabled="true" placeholder="Vendor ID" class="form-contol input-md"
                                               wire:model="vendor_id" value="{{Auth::user()->id}}"/>

                                    </div>
                                </div>
                            @endif

                            <div class="form-group">
                                <label class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
