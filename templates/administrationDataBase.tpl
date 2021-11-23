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
                    <a href=""
                        class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Administrar Productos
                    </a>
                    <a href="showAdminCategories/"
                        class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Administrar Categorias
                    </a>
                    <a href="showAdminUsers"
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
    <div class=" space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <form action="insertProduct" method="POST" enctype="multipart/form-data">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Agregar producto</h3>
                    </div>
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <select name="color" id="color"
                                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Seleccione el color</option>
                                <option value="rojo">Rojo</option>
                                <option value="azul">Azul</option>
                                <option value="amarillo">Amarillo</option>
                                <option value="verde">Verde</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <select name="size" id="size"
                                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Seleccione el talle correspondiente</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <input type="number" name="stock" id="stock" placeholder="Ingrese stock disponible"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <input type="number" name="price" id="price" placeholder="Ingrese precio"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6">
                            <select name="id_category" id="id_category"
                                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Seleccione la categoria</option>
                                {foreach from=$categories item=$category }
                                    <option value="{$category->id_category}">{$category->name}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div>
                    
                </div>
                    </div>
                </div>
                {* {$denied|@debug_print_var}
                <h1>{$denied}</h1> *}
            </div>
            <input type="file" name="input_name" id="imageToUpload">
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <input type="submit" value="Agregar Producto"
                    class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            </div>
        </form>
    </div>
</div>


{include file= 'templates/showEditableProducts.tpl'}

{include file= 'templates/footer.tpl'}