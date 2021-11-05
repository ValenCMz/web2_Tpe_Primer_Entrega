{include file= 'templates/header.tpl'}

<h1 class="text-lg leading-6 font-medium text-white bg-indigo-600 p-6">Listado de Categorías: </h1>
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
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Editar</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Borrar</th>
                        </tr>
                    </thead>
                    {foreach from=$categories item=$category }
                        <tbody class="bg-white divide-y divide-gray-200">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$category->name}
                            </td>
                            <td class="detalle-producto"><a
                                    class="text-indigo-600 hover:text-indigo-900 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    href="showEditableCategories/{$category->id_category}">Editar</a> </td>
                            <td class="detalle-producto"><a
                                    class="text-indigo-600 hover:text-indigo-900 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                    href="deleteCategory/{$category->id_category}">Borrar</a>
                            </td>
                        </tbody>
                    {/foreach}
                </table>
            </div>
        </div>
    </div>
</div>
{include file= 'templates/footer.tpl'}