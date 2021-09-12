<style>
  p{
    font-size: 20px;
  }
</style>
<div style="border: 3px solid #ff2832; margin: auto;">

    <div style="width: 90%; display: flex; margin: auto; height: 400px;">
        <fieldset>
          <legend>User profile</legend>
          <?php foreach ($users as $user): ?>
        <p>User name : {{$user->name}}<br></p>
        <p>Email : {{$user->email}}<br></p>
  <a href="{{route('user.editaccount',['id'=>$user->id])}}" style="color: #ff2832;"><button style="margin-bottom: 5px; margin-top: 5px;">Edit Profile</button></a>
    <?php endforeach; ?>
      </fieldset>
    </div>
</div>
