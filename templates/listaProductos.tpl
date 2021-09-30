{include file= 'templates/header.tpl'}
<h2>Lista de todos los productos disponibles</h2>
<table>
    <thead>
        <th>Color</th>
        <th>Talle</th>
        <th>Stock Disponible</th>
        <th>Precio</th>
    </thead>
    {foreach from=$productos item=$producto}
        <tbody>
            <td>{$producto->color}</td>
            <td>{$producto->talle}</td>
            <td>{$producto->stock}</td>
            <td>{$producto->precio}</td>
            <td><a href="detallesProducto/{$producto->id_producto}">Detalles</a> </td>
        </tbody>
    {/foreach}
</table>
{include file= 'templates/footer.tpl'}