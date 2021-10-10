{include file= 'templates/header.tpl'}
<u>
    <h2 class="titulo-productos">Listado de todos los productos disponibles: </h2>
</u>
<table class="table tabla-productos table text-gray-400 border-separate space-y-6 text-sm>


<style>

    .table {
    border-spacing: 0 15px;
  }

  i {
    font-size: 1rem !important;
  }

  .table tr {
    border-radius: 20px;
  }

  tr td:nth-child(n + 6),
  tr th:nth-child(n + 6) {
    border-radius: 0 0.625rem 0.625rem 0;
  }

  tr td:nth-child(1),
  tr th:nth-child(1) {
    border-radius: 0.625rem 0 0 0.625rem;
  }

</style>
    <thead class="bg-blue-500 text-white">
        <th class="p-3">Color</th>
        <th class="p-3">Talle</th>
        <th class="p-3">Stock Disponible</th>
        <th class="p-3">Precio</th>
        <th class="p-3">Detalle del producto</th>
    </thead>
    {foreach from=$productos item=$producto}
        <tbody>
            <td class="">{$producto->color}</td>
            <td>{$producto->talle}</td>
            <td>{$producto->stock}</td>
            <td>${$producto->precio}</td>
            <td class="detalle-producto"><a href="detallesProducto/{$producto->id_producto}">Detalles</a> </td>
        </tbody>
    {/foreach}
</table>
{include file= 'templates/footer.tpl'}