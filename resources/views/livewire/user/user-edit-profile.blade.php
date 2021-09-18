<div>
  <div style="margin: 20px; padding: 20px; border: 3px solid #ff2832;">
  <form  enctype="multipart/form-data" wire:submit.prevent="updateUser">
    <fieldset>
      <legend>User profile</legend>
    <label for="username">Enter new user name : </label>
      <input style="margin: 10px;" wire:model="name" type="text"   required>
      <br>
      <label for="email">Enter new Email : </label>
    <input style="margin: 10px;" type="text"  wire:model="email"    required>
      <br>
      <label for="password">Enter new Password : </label>
      <input style="margin: 10px;"  wire:model="password" type="password"   required>
      <br>
    <br>
    <button style="margin-top: 5px;" type="submit">Submit</button>
  </form>
</fieldset>
<?php foreach ($users as $user):
  ?>
    <center><a href="{{route('user.account',['id'=>$user->id])}}" style="color: #ff2832;"><button style="margin-bottom: 5px; margin-top: 5px;">Back</button></a></center>
          <?php endforeach; ?>
</div>
</div>
