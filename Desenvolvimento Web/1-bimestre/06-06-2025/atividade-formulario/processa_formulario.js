function converte_resolucao($a, $b) {

    let altura_tela = 775.5;
    let largura_tela = 1180;

    if ($b == "height") {

        console.log(($a * 100) / altura_tela);
    }
    else if ($b == "width") {

        console.log(($a * 100) / largura_tela);

    }

}

function aviso() {

    if (getComputedStyle(document.getElementById("fundo_aviso")).display == "flex") {
        
        let posicaoX = window.scrollX;
        let posicaoY = window.scrollY;

        console.log(posicaoX, posicaoY);

        window.onscroll = function () {

            scrollTo(posicaoX, posicaoY);

        }

        

    }

}

function processar_formulario() {

    let nome_elem = document.querySelector("#nome");

    let data_nascimento_elem = document.querySelector("#data_nascimento");


    data_nascimento = new Date(data_nascimento_elem.value);

    if (nome_elem.value == "Maycon") {

        document.getElementById("fundo_aviso").style.display = "flex";

        aviso();

    }

    // Tem que fazer eles virarem zero e mandar eles para um console, na aula mandamos para uma lista e tals

    console.log(nome_elem.value);

    console.log(data_nascimento);


    // Reinicia os campos

    nome_elem.value = "Banana";

    data_nascimento_elem.value = "";

    return false;
}

let seta_tamanho_lado = document.querySelector("#seta #estrutura_seta").offsetHeight;

let raiz = Math.sqrt((seta_tamanho_lado * seta_tamanho_lado) + (seta_tamanho_lado * seta_tamanho_lado));

let metade_raiz = raiz / 2

document.querySelector("#seta").style.height = `${metade_raiz}px`;

document.querySelector("#seta").style.width = `${raiz}px`

    document.querySelector("#seta #estrutura_seta").style.width = `${seta_tamanho_lado}px`;

    document.querySelector("#seta #estrutura_seta").style.position = "absolute";

    document.querySelector("#seta #estrutura_seta").style.bottom = "-50px";

converte_resolucao()
