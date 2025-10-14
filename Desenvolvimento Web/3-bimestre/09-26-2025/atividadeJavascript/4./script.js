
let contador = document.querySelector("#contador")
let botaoReinicia = document.querySelector("#botaoReiniciaContagem")
let botaoSomaContagem = document.querySelector("#botaoSomaContagem")

botaoSomaContagem.addEventListener("click", () => {

    contador.innerText = parseInt(contador.innerText) + 1

})

botaoReinicia.addEventListener("click", () => {

    contador.innerText = 0;
    
})