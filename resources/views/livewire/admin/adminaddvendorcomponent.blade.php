<div>
    <div class="container" style="padding: 30px 0 ">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.vendor')}}" class="btn btn-success pull-right">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="submit" style="margin-bottom: 30px">

        <div class="form-group">
            <label class="col-md-4 control-label">Name</label>
            <div class="col-md-4">
                <input type="text" placeholder="Name" class="form-control input-md" Wire:model="name">
                @error('name')
                <span style="color:red">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Email</label>
            <div class="col-md-4">
                <input type="text" placeholder="Email" class="form-control input-md" wire:model="email">
                @error('email')
                <span style="color:red">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-4">
                <input type="password" placeholder="password" class="form-control input-md" wire:model="password">
                @error('password')
                <span style="color:red">{{$message}}</span>
                @enderror
            </div>
        </div>
{{--        <div class="form-group" >--}}

{{--            <div class="col-md-4">--}}
{{--                <input type="text"  class="form-control input-md" wire:model="utype" value="VEN" >--}}

{{--            </div>--}}
{{--        </div>--}}
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <button type="submit " class="btn btn-primary">Submit</button>
                @if(session()->has('success'))
                    <div style="color: #00bf3f">{{session('success')}}</div>
                @endif
            </div>
        </div>

    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
