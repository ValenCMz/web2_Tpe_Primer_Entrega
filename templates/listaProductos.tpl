{include file= 'templates/header.tpl'}
<u>
    <h2 class="titulo-productos">Listado de todos los productos disponibles: </h2>
</u>
<table class="table tabla-productos">
    <thead class="table-dark">
        <th>Color</th>
        <th>Talle</th>
        <th>Stock Disponible</th>
        <th>Precio</th>
        <th>Detalle del producto</th>
    </thead>
    {foreach from=$productos item=$producto}
        <tbody>
            <td>{$producto->color}</td>
            <td>{$producto->talle}</td>
            <td>{$producto->stock}</td>
            <td>${$producto->precio}</td>
            <td class="detalle-producto"><a href="detallesProducto/{$producto->id_producto}">Detalles</a> </td>
        </tbody>
    {/foreach}
</table>
{include file= 'templates/footer.tpl'}