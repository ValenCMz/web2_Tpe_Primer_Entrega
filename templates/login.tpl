 {include file= 'templates/header.tpl'}
 <form action="login" method="POST">
     <input type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre:">
     <input type="password" name="clave" id="clave" placeholder="Ingrese Clave:">
     <input type="submit" value="login" />
 </form>
 <h4>{$denegado}</h4>

 <a href="home/">Volver al home</a>
 <br>
 <a href="mostrarFormularioRegistro/">Registrarse</a>
{include file= 'templates/footer.tpl'}