<h2>Create car:</h2>

<form action="/cars" method="POST">
  @csrf
  <label>Merk:</label><br><br>
  <input type="text" name="merk"><br><br>
  <label>Type:</label><br><br>
  <input type="text" name="type"><br><br>
  <label>Bouwjaar:</label><br><br>
  <input type="text" name="bouwjaar"><br><br>
  <input type="submit" value="Create car">
</form>