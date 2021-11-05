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
                        class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">

                        Administrar Categorias
                    </a>
                    <a href="#/"
                        class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
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

<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Agregar nueva categoría
        </h3>
        <div class="mt-2 max-w-xl text-sm text-gray-500">
            <p>
                Ingrese el nombre de la nueva categoría
            </p>
        </div>
        <form action="insertCategory" method="POST" class="mt-5 sm:flex sm:items-center">
            <div class="w-full sm:max-w-xs">
                <input type="text" name="newCategory" id="newCategory"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                    placeholder="Categoría">
            </div>
            <button type="submit" value="Enviar"
                class="mt-3 w-full inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Guardar
            </button>
        </form>
    </div>
</div>


{include file= 'templates/showEditableCategories.tpl'}
{include file= 'templates/footer.tpl'}