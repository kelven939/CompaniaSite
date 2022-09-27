console.log(3);
function checkpwd(){
        let check = document.querySelector(".checked");
        if (check.type==="password") {
            check.type="text";
        }else{
            check.type="password";
    }
}

function validar(){
        if (document.formCada.primeironome.value == "") {
            alert("Inser o seu primeiro nome");
            document.querySelector(".nome").focus();
            return false;
        }
        if (document.formCada.segundonome.value == "") {
            alert("Inser o seu apelido");
            document.querySelector(".apelido").focus();
            return false;
        }
        if (document.formCada.senha.value == "" && (document.formCada.senha.value).match(/[0-9]/)) {
            alert("Inser a sua senha");
            document.getElementById("nome2").focus();
            return false;
        }
}

function wordStyle(){
        let wordParagrafo = document.querySelector(".p1");
            wordParagrafo.setAttribute("class", "wordP");
            wordParagrafo.setAttribute("style", "color: white");
        let wordTitle = document.querySelector(".h1");
            wordTitle.setAttribute("class", "wordT");
            wordTitle.setAttribute("style", "color: yellow; font-size: 35px; text-align: center");
    }
        wordStyle();
        