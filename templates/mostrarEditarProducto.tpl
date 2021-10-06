{include file= 'templates/header.tpl'}

<form action="editarProducto" method="POST">
    <input type="hidden" name="idProducto" value="{$producto}">
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
    <input type="submit" value="Editar">
</form>

{include file= 'templates/footer.tpl'}