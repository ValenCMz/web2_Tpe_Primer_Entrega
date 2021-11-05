"use strict"
const API_URL = "api/comment";

document.querySelector(".form-alta").addEventListener("submit", insertComment);

let appComments = new Vue({
    el: "#appC",
    data: {
        titulo: "Lista de tareas CSR",
        subtitulo: "Esta lista de tareas se renderiza desde JS usando Vue",

        tareas: [], // this->smarty->assign("tareas",  $tareas)
    },
});

async function getComments() {
    // fetch para traer todas las tareas
    try {
        let response = await fetch(API_URL);
        let comments = await response.json();

        appComments.comments = comments;
    } catch (e) {
        console.log(e);
    }
}

async function insertComment(e) {
    console.log("as");
    e.preventDefault();
    alert("Si te animás hace el POST via fetch ;)");
}

getComments();

function getTasks() {
    fetch('api/tareas/')
        .then(response => response.json())
        .then(tasks => {
            let content = document.querySelector(".lista-tareas");
            content.innerHTML = "";
            for (let task of tasks) {
                content.innerHTML += createCommentHTML(task);
            }
        })
        .catch(error => console.log(error));
}

function createCommentHTML(comment) {
    let element = `${comment.author}: ${comment.content}`;

    if (comment.finalizada == 1)
        element = `<strike>${element}</strike>`;
    else {
        element += `<a href="tarea/${task.id}">Ver</a> `;
        element += `<a href="finalizar/${task.id}">Finalizar</a> `;
        element += `<a href="borrar/${task.id}">Eliminar</a>`;
    }

    element = `<li>${element}</li>`;
    return element;
}