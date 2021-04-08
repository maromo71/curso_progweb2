<!DOCTYPE html>
<html>
<body>

<h2>A Tag Select</h2>

<p>O elemento select define uma lista do tipo drop-down:</p>

<form action="/action_page.php">
  <label for="cars">Escolha um Carro:</label>
  <br>
  <select id="cars" name="cars" multiple>
    <option value="volvo">Volvo</option>
    <option value="ferrari">Ferrari</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
  <br>
  <input type="submit" value="Enviar">
</form>

</body>
</html>