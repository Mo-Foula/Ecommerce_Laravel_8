<div>

    <style>
        nav svg {
            height: 20px;
        }

        nav.hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Vendors
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addvendor')}}" class="btn btn-success pull-right">Add Vendor</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th>Id</th>

                                <th>Name</th>
                                <th>Email</th>

                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Vendors as $Vendor)
                                <tr>
                                    <td>{{$Vendor->id}}</td>

                                    <td>{{$Vendor->name}}</td>
                                    <td>{{$Vendor->email}}</td>

                                    <td>

                                        <a href="#" wire:click.prevent="delete({{$Vendor->id}})"><i
                                                class="fa fa-times fa-2x text-danger " style="color:black"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if(session()->has('delete'))
                            <div style="color: #00bf3f">{{session('delete')}}</div>
                        @endif
                    </div>
                    {{$Vendors->links()}}
{{--                            @if(session()->has('delete'))--}}
{{--                                <div class="alert alert-success"">{{session('delete')}}</div>--}}
{{--                            @endif                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
