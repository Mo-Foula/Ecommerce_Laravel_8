<div >
  <div style="width: 95%; margin: auto; border: solid 3px #ff2832; margin-top: 10px; margin-bottom: 10px;">
    <table class="table table-striped" style="width: 95%; margin:auto; margin-top: 10px; margin-bottom: 10px;">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Delete Category</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $categories)
      <tr>
        <th scope="row">{{$categories->id}}</th>
        <td>{{$categories->name}}</td>
        <td><a href="#" wire:click.prevent="deleteCoupon({{$categories->id}})">Delete</a></td>
      </tr>
    </tbody>
    @endforeach
  </table>

</div>
  <a href="{{route('admin.add.Categories')}}" style="color: white;"><center><button style="margin-bottom: 5px; margin-top: 5px; background-color: #ff2832;">Add Category</button></center></a>
</div>
