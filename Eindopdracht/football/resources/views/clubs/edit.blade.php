<h2>Update Club:</h2>

<form action="/clubs/{{$club->ClubID}}" method="POST">
  @csrf
  @method('PUT')
  <h3><strong>Name</strong></h3>
  <input name="Name" type="text" value="{{$club->Name}}">  <br>

  <h3><strong>League</strong></h3>
  <input name="League" type="text" value="{{$club->League}}">  <br>

  <h3><strong>Champions league titels</strong></h3>
  <input name="Champions_league_titels" type="text" value="{{$club->Champions_league_titels}}">  <br>

  <h3><strong>Top scorer</strong></h3>
  <input name="Top_scorer" type="text" value="{{$club->Top_scorer}}">  <br><br><br>

  <button type="submit">Update Club</button>
</form>


