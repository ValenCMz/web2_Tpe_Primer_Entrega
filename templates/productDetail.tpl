{include file= 'templates/header.tpl'}

<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Detalles del producto {$product->id_product}
        </h3>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Color
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {$product->color}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Talle
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {$product->size}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Stock
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {$product->stock}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Precio
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    ${$product->price}
                </dd>
            </div>
        </dl>
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
{* <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <div class="px-4 py-3 text-left sm:px-6">
            <a href="api/comment/{$product->id_product}"
                class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Mostrar comentarios de este producto
            </a>
        </div>
    </div>
</div> *}


<script src="js/comment.js"></script>

{include file= 'templates/footer.tpl'}