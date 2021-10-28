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
                        class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Home
                    </a>

                    <a href="showCategories/"
                        class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Ver las categorias enlistadas
                    </a>
                    {if !empty($user)}
                        <a href="logout/"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Log out
                        </a>
                        <a href="administration/"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Administración
                        </a>
                    {else}
                        <a href="showLogin/"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Log In
                        </a>
                    {/if}


                </div>
            </div>


        </div>
</nav>




{include file= 'templates/showProducts.tpl'}
<br>

{include file= 'templates/footer.tpl'}