const imagens = [ 

                 "https://picsum.photos/id/237/600/400", 
                 "https://picsum.photos/id/238/600/400", 
                 "https://picsum.photos/id/239/600/400", 
                 "https://picsum.photos/id/240/600/400" 

                ]

const imagemCarrosel = document.querySelector("#imagem img")

let chaveSourceImagem
let proximaChaveSourceImagem


imagemCarrosel.src = imagens[0]


function trocarImagem() {

    chaveSourceImagem = imagens.indexOf(imagemCarrosel.src)

    proximaChaveSourceImagem = chaveSourceImagem + 1

    proximaChaveSourceImagem %= imagens.length

    imagemCarrosel.src = imagens[proximaChaveSourceImagem]

    setTimeout(trocarImagem, 5000);

}

trocarImagem();
