{include file= 'templates/header.tpl'}
<u>
    <h2 class="titulo-productos">Listado de todas las categorias disponibles: </h2>
</u>
<table class= "table tabla-productos">
    <thead class="table-dark">
        <th>Nombre de la categoria</th>
        <th>Editar</th>
        <th>Borrar</th>
    </thead>
    {foreach from=$categorias item=$categoria }
        <tbody>
            <td>{$categoria->nombre}</td>
            <td class="detalle-producto"><a href="mostrarEditarCategoria/{$categoria->id_categoria}">Editar</a> </td>
            <td class="detalle-producto"><a href="borrarCategoria/{$categoria->id_categoria}">Borrar</a> </td>
        </tbody>
    {/foreach}
</table>
{include file= 'templates/footer.tpl'}