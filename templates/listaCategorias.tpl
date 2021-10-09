{include file= 'templates/header.tpl'}
<table class= "table tabla-productos">
    <thead class="table-dark">
        <th>Nombre de la categoria</th>
    </thead>
    {foreach from=$categorias item=$categoria }
        <tbody>
            <td>{$categoria->nombre}</td>
            <td><a href="productosPorCategoria/{$categoria->id_categoria}">Ver productos de esta
                    categoria</a> </td>
        </tbody>
    {/foreach}
</table>
{include file= 'templates/footer.tpl'}