var btn_log = document.querySelector("#Idlogin");
var btn_cad = document.querySelector("#Idcadastro");

var body = document.querySelector("body");



btn_log.addEventListener("click", function (){
body.className = "logar-js";
})

btn_cad.addEventListener("click", function (){
    body.className = "cadastrar-js";
    })

