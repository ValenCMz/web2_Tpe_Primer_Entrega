{include file= 'templates/header.tpl'}
<table>
    <thead>
        <th>id_categoria</th>
        <th>Nombre</th>
    </thead>
    {foreach from=$categorias item=$categoria }
        <tbody>
            <td>{$categoria->id_categoria}</td>
            <td>{$categoria->nombre}</td>
            <td><a href="productosPorCategoria/{$categoria->id_categoria}">Ver productos de esta categoria</a> </td>
        </tbody>
    {/foreach}
</table>
{include file= 'templates/footer.tpl'}