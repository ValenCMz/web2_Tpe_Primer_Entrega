

    <h1 class="text-lg leading-6 font-medium text-white bg-indigo-600 p-6">Listado de Productos: </h1>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Color</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Talle</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Stock Disponible</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Precio</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Detalle del producto</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Editar</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Borrar del producto</th>
                        </tr>
                    </thead>
                    {foreach from=$productos item=$producto}
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$producto->color}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$producto->talle}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$producto->stock}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    ${$producto->precio}
                                </td>
                                <td class="detalle-producto"><a
                                        class="text-indigo-600 hover:text-indigo-900 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                        href="detallesProducto/{$producto->id_producto}">Detalles</a>
                                </td>
                                <td class="detalle-producto"><a
                                        class="text-indigo-600 hover:text-indigo-900 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                        href="mostrarEditarProducto/{$producto->id_producto}">Editar</a>
                                </td>
                                <td class="detalle-producto"><a
                                        class="text-indigo-600 hover:text-indigo-900 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                        href="borrarProducto/{$producto->id_producto}">Borrar</a> </td>
                            </tr>
                        </tbody>
                    {/foreach}
                </table>
            </div>
        </div>
    </div>
</div>
{include file= 'templates/footer.tpl'}