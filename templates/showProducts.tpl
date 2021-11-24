{include file= 'templates/header.tpl'}

<h1 class="text-lg leading-6 font-medium text-white bg-indigo-600 p-6">Listado de productos disponibles: </h1>

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
                                Detalle del producto
                            </th>
                        </tr>
                    </thead>
                    {foreach from=$products item=$product}
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$product->color}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$product->size}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$product->stock}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    ${$product->price}</td>
                                <h1 id="product" data-idProducto={$product->id_product}</h1>
                                    <td>
                                        <a class="text-indigo-600 hover:text-indigo-900 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                            href="productDetail/{$product->id_product}">Detalles</a>
                                    </td>
                                    {if isset($product->img)}
                                        <td><img class="px-6 py-4 w-12 box-content" src="{$product->img}"/></td>
                                    {/if}
                            </tr>
                        </tbody>
                       
                    {/foreach}
                </table>
            </div>
        </div>
    </div>
</div>




{include file= 'templates/footer.tpl'}