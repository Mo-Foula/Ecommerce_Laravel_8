<div>
  <div style="margin: 20px; padding: 20px; border: 3px solid #ff2832;">
  <form enctype="multipart/form-data" wire:submit.prevent="updateUser">
    <fieldset>
      <legend>Change profile</legend>
    <label for="">Enter new user name : </label>
    <?php foreach ($users as $user):
      ?>
      <input style="margin: 10px;" wire:model="name" type="text"  value="{{$user->name}}"  required>
      <br>
      <label for="">Enter new Email : </label>
    <input style="margin: 10px;" type="text"  wire:model="email"  value="{{$user->email}}"  required>
      <br>
      <label for="">Enter new Password : </label>
      <input style="margin: 10px;"  wire:model="password" type="password"  value="{{$user->password}}" required>
      <br>
      <label for="">Change type of the user : </label>
      <select id="cars" wire:model="utype" style="margin: 10px;">
      <option selected value="User">User</option>
      <option value="Admin">Admin</option>
      <option value="Vendor">Vendor</option>
      </select>
    <?php endforeach; ?>
    <br>
    <button style="margin-top: 5px;" type="submit">Submit</button>
  </fieldset>
  </form>
</div>
</div>
