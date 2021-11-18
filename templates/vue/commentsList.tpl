{literal}
    <table id="comments-table">
        <thead>
            <td>Email</td>
            <td>Comentario</td>
            <td>Valoracion</td>
        </thead>

        <tr v-for="comment in comments">
            <td>{{comment.email}}</td>
            <td>{{comment.content}}</td>
            <td>{{comment.score}}</td>
        </tr>
    </table>
{/literal}