<h2>Add a song:</h2>

<form action="/songs" method="POST">
  @csrf
  <label>Title:</label><br><br>
  <input type="text" name="title"><br><br>
  <label>Singer:</label><br><br>
  <input type="text" name="singer"><br><br>
  <input type="submit" value="Add song">

  <div class="container">
  @if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert"><br>
        {{$error}}
    </div>
    @endforeach
  @endif

</form>
