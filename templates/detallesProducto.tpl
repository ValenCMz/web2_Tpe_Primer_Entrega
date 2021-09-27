{include file= 'templates/header.tpl'}

<h1>Detalles del producto {$producto->id_producto}</h1>
<ul>
    <li>Color: {$producto->color}</li>
    <li>Talle: {$producto->talle}</li>
    <li>Stock disponible: {$producto->stock}</li>
    <li>Precio: ${$producto->precio}</li>
    <li>id_categoria: {$producto->id_categoria}</li>
</ul>

{include file= 'templates/footer.tpl'}