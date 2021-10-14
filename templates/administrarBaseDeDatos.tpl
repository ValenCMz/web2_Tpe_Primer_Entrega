{include file= 'templates/header.tpl'}
<div class="bg-white shadow sm:rounded-lg">
    <div class=" space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <form action="agregarProducto" method="POST">
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
                            <select name="talle" id="talle"
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
                            <input type="number" name="precio" id="precio" placeholder="Ingrese precio"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6">
                            <select name="id_categoria" id="id_categoria"
                                class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Seleccione la categoria</option>
                                {foreach from=$categorias item=$categoria }
                                    <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <input type="submit" value="Agregar"
                    class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            </div>
        </form>
    </div>
</div>

{include file= 'templates/listarProductosEditables.tpl'}


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
        <form action="agregarCategoria" method="POST" class="mt-5 sm:flex sm:items-center">
            <div class="w-full sm:max-w-xs">
                <input type="text" name="nueva_categoria" id="nueva_categoria"
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


{include file= 'templates/listarCategoriasEditables.tpl'}
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