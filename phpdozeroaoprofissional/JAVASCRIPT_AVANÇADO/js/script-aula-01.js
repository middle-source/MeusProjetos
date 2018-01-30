/* WebStorage guardar informações do usuario em JS */

if(typeof localStorage.nome == "undefined" ){
    localStorage.nome = prompt("Qual seu nome ?");
}

nome = localStorage.nome;


document.getElementById("info").innerHTML = nome;