{include file= 'templates/header.tpl'}

<form action="editarCategoria" method="POST">
    <input type="hidden" name="idCategoria" value="{$categorias}">
    <input type="text" name="nueva_categoria" id="nueva_categoria" placeholder="Ingrese nueva categoria">
    <input type="submit" value="Enviar">
</form>

{include file= 'templates/footer.tpl'}