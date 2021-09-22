<div>
  <div style="width: 90%; margin: auto; background-color: white; margin-top: 1em; height: 500px;">
    <div style="background-color: #f2f2f2">
      <h5 style=" padding: 0.5em; text-align: center; color: rgb(232, 90, 58);">Add cateogries</h5>
    </div>
    <div style="border: solid 3px #ff2832;">
    <form enctype="multipart/form-data" wire:submit.prevent="addCategory"  style="padding: 0.5em; margin: 1em; ">
<label for="Category name" style="font-size: 1.5em; padding: 0.5em; margin: 1em; color: rgb(232, 90, 58);">Cateogry name :  </label>
<input type="text" placeholder="Category name" style="padding: 0.5em; margin: 1em;" wire:model="categoryname" wire:keyup="generateSlug"><br>
<button type="submit" style="padding: 0.5em; margin-left: 3em; color: rgb(232, 90, 58);">Submit</button>
</form>
<center><a href="{{route('admin.category.list')}}"><button style="padding: 0.5em; margin: 3em; color: rgb(232, 90, 58);">Back to category list</button></a><center>
  </div>
</div>
</div>
