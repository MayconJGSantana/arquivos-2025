const botaoMudaTema = document.querySelector("#botao-muda-tema")
const body = document.querySelector("body");

botaoMudaTema.addEventListener("click", () => {

    body.classList.toggle("tema-escuro")

    valorTemaBody = body.classList.contains("tema-escuro")

    if (valorTemaBody) {

        localStorage.setItem("tema", "escuro")

    }
    else {

        localStorage.setItem("tema", "branco")

    }

})

temaPrevio = localStorage.getItem("tema")

if (temaPrevio == "escuro") {

    body.classList.add("tema-escuro")

}