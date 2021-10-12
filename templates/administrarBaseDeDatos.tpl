{include file= 'templates/header.tpl'}

<h1>Agregar un producto a la base de datos</h1>
<form action="agregarProducto" method="POST">
    <select name="color" id="color">
        <option value="">Seleccione el color</option>
        <option value="rojo">Rojo</option>
        <option value="azul">Azul</option>
        <option value="amarillo">Amarillo</option>
        <option value="verde">Verde</option>
    </select>
    <select name="talle" id="talle">
        <option value="">Seleccione el talle correspondiente</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
    </select>
    <input type="number" name="stock" id="stock" placeholder="Ingrese stock disponible">
    <input type="number" name="precio" id="precio" placeholder="Ingrese precio">
    <select name="id_categoria" id="id_categoria">
        <option value="">Seleccione la categoria</option>
        {foreach from=$categorias item=$categoria }
            <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
        {/foreach}
    </select>
    <input type="submit" value="Enviar">
</form>

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
        <input type="text" name="nueva_categoria" id="nueva_categoria" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Categoría">
      </div>
      <button type="submit" value="Enviar" class="mt-3 w-full inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
        Guardar
      </button>
    </form>
  </div>
</div>


{include file= 'templates/listarCategoriasEditables.tpl'}


{include file= 'templates/footer.tpl'}