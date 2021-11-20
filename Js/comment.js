"use strict";

const product = document.querySelector("#form-comment");
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

getComments(id_product);