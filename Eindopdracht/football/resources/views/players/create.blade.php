<h2>Add a Player:</h2>

<form action="/players" method="POST">
  @csrf
  <label>Name:</label><br><br>
  <input type="text" name="Name"><br><br>

  <label>Position:</label><br><br>
  <input type="text" name="Position"><br><br>

  <label>Nationality:</label><br><br>
  <input type="text" name="Nationality"><br><br>

  <label>Birthdate:</label><br><br>
  <input type="text" name="Birthdate"><br><br>

  <input type="submit" value="Add Player">

  <div class="container">
  @if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert"><br>
        {{$error}}
    </div>
    @endforeach
  @endif

</form>
