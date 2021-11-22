{literal}
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200" id="comments-table">
                        <thead class="bg-gray-50">
                            <tr>
                                <td scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email</td>
                                <td scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Comentario</td>
                                <td scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Valoracion</td>
                                    <td v-if="isAdmin" scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Eliminar usuario</td>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" >
                            <tr v-for="comment in comments">
                            <h1></h1>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{comment.id_author}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{comment.content}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{comment.score}} puntos</td>
                                    <td v-if="isAdmin" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <button v-on:click="deleteComment(comment.id_comment)" value="" class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Eliminar</button>
                                    </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{/literal}

