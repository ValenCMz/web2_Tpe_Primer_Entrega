"use strict";

const product = document.querySelector("#form-comment");
const id_product = product.getAttribute("data-idProducto");
const user = document.querySelector("#user");
const id_user = user.getAttribute("data-idUsuario");
const aparentAdmin = document.querySelector("#app");
const isAdmin = aparentAdmin.getAttribute("data-isAdmin");

// problema de incompatibilidad
//const API_URL = `http://localhost/web2/web2_Tpe_Primer_Entrega/api/comment/product/${id_product}`;
const API_URL = `api/comment/product/${id_product}`;
const API_URL_POST = `api/comment`;


let app = new Vue({
    el: '#app',
    data: {
        comments: [],
        isAdmin: isAdmin
    },
    methods: {
        async deleteComment(idComment) {
            try {
                let res = await fetch(`${API_URL_POST}/${idComment}`, {
                    "method": "DELETE",
                    "mode": "cors"
                });
                if (res.status == 200) {
                    getComments();
                }
            } catch (error) {
                console.log("error");
            }
        }
    }
});

async function getComments() {
    try {
        let response = await fetch(API_URL);
        let comments = await response.json();

        app.comments = comments;
        console.log(app.comments);
    } catch (error) {
        console.error(error);
    }
}

getComments(id_product);
let btn_comment = document.querySelector("#btn_comment").addEventListener("click", insertComment);

async function insertComment() {
        let content = document.getElementById("content").value;
        let score = document.getElementById("score").value;
        let newComment = {
            content: content,
            score: score,
            id_author: id_user,
            id_product: id_product
        }
        try {
            let res = await fetch(API_URL_POST, {
                "method": "POST",
                "mode": "cors",
                "headers": {
                    "Content-type": "application/json"
                },
                "body": JSON.stringify(newComment)
            });  
            if (res.status == 200) {
                getComments();
            }
    } catch (error) {
        console.log("error");
    }
}

