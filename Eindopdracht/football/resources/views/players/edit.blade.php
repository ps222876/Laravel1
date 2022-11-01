<h2>Update Player:</h2>

<form action="/players/{{$player->id}}" method="POST">
  @csrf
  @method('PUT')
  <h3><strong>Name</strong></h3>
  <input name="Name" type="text" value="{{$player->Name}}">  <br>

  <h3><strong>Position</strong></h3>
  <input name="Position" type="text" value="{{$player->Position}}">  <br>

  <h3><strong>Nationality</strong></h3>
  <input name="Nationality" type="text" value="{{$player->Nationality}}">  <br>

  <h3><strong>Birthdate</strong></h3>
  <input name="Birthdate" type="text" value="{{$player->Birthdate}}">  <br><br><br>

  <button type="submit">Update Player</button>
</form>


