let tituloNoticia = document.querySelector('.headline .headline__container .post__title')

let subTitulosNoticia = document.querySelectorAll('.headline .headline__bullets li')

let imagemNoticia = document.querySelector('.post__image img')


// Troca texto

imagemNoticia.srcset = "https://etimologia.com.br/foto/filosofia/Paz-simbolo-passaro.jpg"

tituloNoticia.textContent = "Enfim paz: todos seres humanos trabalhando coletivamente"

    // Troca texto dos subtítulos e apaga se tiver outros
let mensagem = "As pessoas perceberam que todas buscavam o mesmo objetivo. Estudos apontam que a motivação para guerras era, na verdade, a interpretação equivocada"

if (subTitulosNoticia instanceof NodeList) {

    subTitulosNoticia[0].querySelector('.post__title').textContent = mensagem

    for (let index = 1; index < subTitulosNoticia.length; index++) {

        subTitulosNoticia[index].remove()
        
    }

}
else {

    subTitulosNoticia.querySelector('.post__title').textContent = mensagem

}

