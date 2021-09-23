{include file= 'templates/header.tpl'}
<table>
    <thead>
        <th>id_producto</th>
        <th>Color</th>
        <th>Talle</th>
        <th>Stock Disponible</th>
        <th>Precio</th>
        <th>id_categoria</th>
    </thead>
    {foreach from=$productos item=$producto}
        <tbody>
            <td>{$producto->id_producto}</td>
            <td>{$producto->color}</td>
            <td>{$producto->talle}</td>
            <td>{$producto->stock}</td>
            <td>{$producto->precio}</td>
            <td>{$producto->id_categoria}</td>
        </tbody>
    {/foreach}
</table>
{include file= 'templates/footer.tpl'}