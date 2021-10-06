  {include file= 'templates/header.tpl'}

  <form action="registrarse" method="POST">
      <input type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre:">
      <input type="password" name="clave" id="clave" placeholder="Ingrese Clave:">
      <input type="submit" value="registrarse" />
  </form>

{include file= 'templates/footer.tpl'}