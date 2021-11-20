{{literal}
    <table>
        <thead>
            <td>Usuario</td>
            <td>Comentario</td>
            <td>Puntaje</td>
        </thead>

        <tr v-for= "comment in comments">
            <td>{{comment.email}}</td>
            <td>{{comment.content}}</td>
            <td>{{comment.score}}</td>
        </tr>

    </table>

{/literal}}