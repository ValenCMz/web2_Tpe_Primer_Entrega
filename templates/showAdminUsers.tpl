{include file= 'templates/header.tpl'}
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-16 w-auto" src="img/logo-tienda.png" alt="Workflow">
                    <img class="hidden lg:block h-16 w-auto" src="img/logo-tienda.png" alt="Logo tienda de remeras">
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <a href=""
                        class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Home
                    </a>
                    <a href="" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex
                    items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Administrar Productos
                    </a>
                    <a href="showAdminCategories/"
                        class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">

                        Administrar Categorias
                    </a>
                    <a href="showAdminUsers/"
                        class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Administrar Usuarios
                    </a>
                    {if empty($user)}
                        <a href="logout/"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Log out
                        </a>
                    {/if}
                </div>
            </div>
        </div>
</nav>

<h1 class="text-lg leading-6 font-medium text-white bg-indigo-600 p-6">Listado de Usuarios: </h1>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Usuario</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Admin</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acciones</th>

                        </tr>
                    </thead>
                    {foreach from=$users item=$user}
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$user->email}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{$user->admin}
                                </td>

                                <td><a class="text-indigo-600 hover:text-indigo-900 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                        href="deleteUser/{$user->id_user}">Eliminar Usuario</a> </td>
                                <td><a class="text-indigo-600 hover:text-indigo-900 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                                        href="setAdmin/{$user->id_user}/{$user->admin}">Cambiar Admin</a> </td>
                            </tr>
                        </tbody>
                    {/foreach}
                </table>
            </div>
        </div>
    </div>
</div>
{include file= 'templates/footer.tpl'}