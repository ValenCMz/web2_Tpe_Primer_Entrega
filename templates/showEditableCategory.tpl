{include file= 'templates/header.tpl'}


<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Editar categoría
        </h3>
        <div class="mt-2 max-w-xl text-sm text-gray-500">
            <p>
                Ingrese el nombre de la nueva categoría
            </p>
        </div>
        <form action="updateCategory" method="POST" class="mt-5 sm:flex sm:items-center">
            <input type="hidden" name="idCategory" value="{$id_category}">
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
<div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <div class="px-4 py-3 text-left sm:px-6">
            <a href="home/"
                class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Volver al home
            </a>
        </div>
    </div>
</div>



{include file= 'templates/footer.tpl'}