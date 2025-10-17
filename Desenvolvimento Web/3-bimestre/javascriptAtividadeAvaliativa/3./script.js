let botaoMuda = document.querySelector("#botaoMuda")
let titulo = document.querySelector("#titulo")
let textos = ["Sinta...", "Adore...", "Proclame...", "Afirme...", "Defenda...", "Imagine...",
              "Sonhe...", "Agradeça...", "Pense...", "Aja...", "Viva...", "Mantenha...",
              "Equilibre...", "Fique...", "Excite...", "Felicite...", "Crie...", "Assista...",
              "Ajude...", "Exista...", "Converse...", "Escreva...", "Durma...", "Descanse...",
              "Produza...", "Observa...", "Garanta...", "Determine...", "Esclareça...",
              "Tente...", "Pegue..."]

botaoMuda.addEventListener("click", () => {

    titulo.style.fontSize = 30 + Math.random() * (100 - 30) + "px"
    titulo.style.color = 'rgb(' + (Math.random() * 255) + ', ' +  (Math.random() * 255) + ', ' + (Math.random() * 255) + ')'
    titulo.innerText = textos[Math.floor(Math.random() * textos.length)]

})