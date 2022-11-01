<h2>Edit song:</h2>

<form action="/songs/{{$song->id}}" method="POST">
  @csrf
  @method('PUT')
  <input name="title" type="text" value="{{$song->title}}">  <br><br>
  <input name="singer" type="text" value="{{$song->singer}}">  <br><br>
  <button type="submit">Update</button>
</form> 


