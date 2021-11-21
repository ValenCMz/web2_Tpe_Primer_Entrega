"use strict";

const comment = document.querySelector("#form-comment").addEventListener("submit", insertComment);
let id_product = product.getAttribute("data-idProducto");

// problema de incompatibilidad
//const API_URL = `http://localhost/web2/web2_Tpe_Primer_Entrega/api/comment/product/${id_product}`;
const API_URL = "http://localhost/api/comment/product/${id_product}";

let app = new Vue({
    el: '#app',
    data: {
        comments: [],
    }
});

async function getComments(id_product) {
    try {
        let response = await fetch(API_URL);
        let comments = await response.json();

        app.comments = comments;

    } catch (error) {
        console.error(error);
    }
}

async function insertComment($params = null) {
    try {

        let response = await fetch(API_URL);
        let comments = await response.json();

    } catch (error) {
        console.error(error);
    }
}

// async function insertComment() {
//     try {
//         let response = await fetch(API_URL),
//             {
//                 method: 'POST',
//                 comment: {
//                     'content': '',
//                     'score': '',
//                     'id_author': ,
//                     'id_product': ,

//                 },
//                 body: JSON.stringify({
//                     a: 1,
//                     b: 'Textual content'
//                 })
//             });
//     let commentContent = await rawResponse.json();
// } catch (error) {
//     console.log("error");
// }


getComments(id_product);