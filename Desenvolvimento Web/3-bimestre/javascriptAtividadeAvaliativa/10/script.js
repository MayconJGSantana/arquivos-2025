const imagens = [ 

                 "https://picsum.photos/id/237/600/400", 
                 "https://picsum.photos/id/238/600/400", 
                 "https://picsum.photos/id/239/600/400", 
                 "https://picsum.photos/id/240/600/400" 

                ]

const imagemCarrosel = document.querySelector("#imagem-carrosel img")

const botaoProxima = document.querySelector("#botao-proxima")
const botaoAnterior = document.querySelector("#botao-anterior")

let chaveSourceImagem
let proximaChaveSourceImagem


imagemCarrosel.src = imagens[0]



botaoAnterior.addEventListener("click", () => {


    chaveSourceImagem = imagens.indexOf(imagemCarrosel.src)

    proximaChaveSourceImagem = chaveSourceImagem - 1

    if (proximaChaveSourceImagem == -1) {

        proximaChaveSourceImagem = imagens.length - 1;
        
    }

    imagemCarrosel.src = imagens[proximaChaveSourceImagem]

})

botaoProxima.addEventListener("click", () => {

    chaveSourceImagem = imagens.indexOf(imagemCarrosel.src)

    proximaChaveSourceImagem = chaveSourceImagem + 1

    proximaChaveSourceImagem %= imagens.length

    imagemCarrosel.src = imagens[proximaChaveSourceImagem]

    console.log()

})
