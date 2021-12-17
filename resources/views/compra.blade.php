<h1>Compra</h1>

<hr>

<form method="post" action="{{ route('dados-compra.index') }}">
  @csrf

  <b>Id Produto</b>
  <input type="text" name="IdProduto"><br><br>

  <b>Produto</b>
  <input type="text" name="Produto"><br><br>

  <b>IdUser</b>
  <input type="text" name="IdUser"><br><br>

  <b>User</b>
  <input type="text" name="User"><br><br>

  <b>Id Compra</b>
  <input type="text" name="IdCompra"><br><br>

  <b>Compra</b>
  <input type="text" name="Compra"><br><br>

  <input type="submit" value="Salvar">

</form>

<hr>