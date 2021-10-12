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
    <form action="editarCategoria" method="POST" class="mt-5 sm:flex sm:items-center">
    <input type="hidden" name="idCategoria" value="{$id_categoria}">
      <div class="w-full sm:max-w-xs">
        <input type="text" name="nueva_categoria" id="nueva_categoria" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Categoría">
      </div>
      <button type="submit" value="Enviar" class="mt-3 w-full inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
        Guardar
      </button>
    </form>
  </div>
</div>


{include file= 'templates/footer.tpl'}