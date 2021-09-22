<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-mid-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Slider
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right"/>All Slides</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(session()->has('msg'))
                                <div class="alert alert-success">{{session()->get('msg')}}</div>
                            @endif
                            <form class="form-horizontal" wire:submit.prevent="addslider">
                                <div class="form-group">
                                   <label class="col-md-4 control-label"> title</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="title" class="form-control " wire:model="title">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Subtitle</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="subtitle" class="form-control input-md" wire:model="subtitle">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> price</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="price" class="form-control input-md" wire:model="price">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> link</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="link" class="form-control input-md" wire:model="link">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Image</label>
                                    <div class="col-md-4">
                                        <input type="file"  class="input-file" wire:model="image">
                                        @if($image)
                                            <img src="{{$image->temporaryURL()}}" width="120px">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"> Status</label>
                                    <div class="col-md-4">
                                       <select class="form-control" wire:model="status">
                                           <option value="0">Active</option>
                                           <option value="1">Inactive</option>
                                       </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                      <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
