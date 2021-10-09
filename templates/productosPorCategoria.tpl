{include file= 'templates/header.tpl'}
    
<h1>{$nombreDeLaCategoria->nombre}</h1>
   
<table>
    <thead>
        <th>Color</th>
        <th>Talle</th>
        <th>Stock Disponible</th>
        <th>Precio</th>
    </thead>
    {foreach from=$productosPorCategoria item=$producto}
        <tbody>
            <td>{$producto->color}</td>
            <td>{$producto->talle}</td>
            <td>{$producto->stock}</td>
            <td>{$producto->precio}</td>
        </tbody>
    {/foreach}
</table>
{include file= 'templates/footer.tpl'}