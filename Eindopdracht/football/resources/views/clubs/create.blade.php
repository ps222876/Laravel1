<h2>Add a club:</h2>

<form action="/clubs" method="POST">
  @csrf
  <label>Name:</label><br><br>
  <input type="text" name="Name"><br><br>

  <label>League:</label><br><br>
  <input type="text" name="League"><br><br>

  <label>Champions league titels:</label><br><br>
  <input type="text" name="Champions_league_titels"><br><br>

  <label>Top scorer:</label><br><br>
  <input type="text" name="Top_scorer"><br><br>

  <input type="submit" value="Add club">

  <div class="container">
  @if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert"><br>
        {{$error}}
    </div>
    @endforeach
  @endif

</form>
