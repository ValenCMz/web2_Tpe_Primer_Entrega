{include file= 'templates/header.tpl'}

<h1 class="titulo-productos">Listado de todas las categorias disponibles: </h1>
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre de la categoria</th>
                        </tr>
                    </thead>
                    {foreach from=$categorias item=$categoria }
                        <tbody class="bg-white divide-y divide-gray-200">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$categoria->nombre}
                            </td>
                            <td><a class="text-indigo-600 hover:text-indigo-900 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    href="productosPorCategoria/{$categoria->id_categoria}">Ver productos de esta
                                    categoria</a> </td>
                        </tbody>
                    {/foreach}
                </table>
{include file= 'templates/footer.tpl'}