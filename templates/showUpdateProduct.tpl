{include file= 'templates/header.tpl'}
<div class="bg-white shadow sm:rounded-lg">
    <div class=" space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <form action="updateProduct" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Editar producto</h3>
                    </div>
                    <div class="grid grid-cols-6 gap-6">
                        <input type="hidden" name="idProduct" value="{$product}">
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
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <input type="submit" value="Editar"
                            class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    </div>
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