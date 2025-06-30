function converte_resolucao_ipad($a, $b) {

    let altura_tela = 775.5;
    let largura_tela = 1180;

    if ($b == "height") {

        console.log(($a * 100) / altura_tela);
    }
    else if ($b == "width") {

        console.log(($a * 100) / largura_tela);

    }

}

function aviso($posicao, $mensagem, $titulo) {

    
    document.querySelectorAll(".seta")[$posicao].style.display = "flex";
    document.querySelectorAll(".aviso")[$posicao].style.display = "block";

    document.querySelectorAll(".aviso .aba .container_texto_aba .texto_aba")[$posicao].innerHTML = $titulo;

    document.querySelectorAll(".aviso .container_corpo_texto .corpo_texto")[$posicao].innerHTML = $mensagem;

}

function converte_resolucao_pc($a, $b) {

    let altura_tela = 911;
    let largura_tela = 1191;

    if ($b == "height") {

        console.log(($a * 100) / altura_tela);
    }
    else if ($b == "width") {

        console.log(($a * 100) / largura_tela);

    }

}

function estado($tipo) {
    
    let posicaoX = window.scrollX;
    let posicaoY = window.scrollY;

    document.getElementById("fundo_aviso").style.display = "flex";

    window.onscroll = function () {

        scrollTo(posicaoX, posicaoY);

    }

    if ($tipo == "sucesso") {

        document.querySelector("#fundo_aviso #corpo_texto_fundo_aviso span").innerHTML = "O formulário foi enviado com sucesso!"

        document.querySelector("#fundo_aviso #botao_fundo_aviso button").innerHTML = "Entendido!"

    }

        

}

function estado_recebido () {

    document.getElementById("fundo_aviso").style.display = "none";

    window.onscroll = function () {

        scrollTo(window.scrollX, window.scrollY);

    }

}

function zera_valores($elemento) {

    
    for (let i = 0; i < $elemento.length; i++) {

        $elemento[i].checked = false;

    }

}

function zera_tudo () {

    // Entrada de variáveis

    let nome_elem = document.querySelector("#nome");
    
    let data_nascimento_elem = document.querySelector("#data_nascimento");

    let telefone_elem = document.querySelector("#telefone");

    let email_elem = document.querySelector("#email");

    let pais_elem = document.querySelector("#pais");

    let opcoes_mercado_trabalho = document.getElementsByName("mercado_trabalho");

    let opcoes_habilidades = document.getElementsByName("habilidades");

    let opcoes_estado_civil = document.querySelectorAll("#estado_civil");


    let comentarios_elem = FroalaEditor.INSTANCES[0]; // Início

    comentarios_elem.html.set(""); // Essa parte, começando no comentário "Início", foi pega no ChatGPT, não fui capaz de pensar em uma alternativa para reiniciar os valores do comentário porque ele é uma classe externa, ainda não sei muito bem sobre isso. Mas posso dizer que tenho uma hipótese do que o chatGPT fez: ele buscou especificar de qual elemento ele quer resetar, então ele usou um método do Froala que possui todos os objetos criados no código e pega o primeiro, então colocou o objeto que foi criado como "" para resetar o valor


    nome_elem.value = "";

    data_nascimento_elem.value = "";

    telefone_elem.value = "";

    email_elem.value = "";

    pais_elem.value = "";

    zera_valores(opcoes_mercado_trabalho);
    
    zera_valores(opcoes_habilidades);

    zera_valores(opcoes_estado_civil);

}

function esconde_avisos() {

    for (let i = 0; i < document.querySelectorAll(".seta").length; i++) {

        document.querySelectorAll(".seta")[i].style.display = "none";
        document.querySelectorAll(".aviso")[i].style.display = "none";

    }

}

function avisa_marcacao_habilidade() { // Avisa para o usuário se ele não tiver marcado uma habilidade, que é obrigatória

    // Entrada de variáveis

    let habilidades_elem = document.getElementsByName("habilidades");

    let i;


    for (i = 0; i < habilidades_elem.length; i++) {

         if (habilidades_elem[i].checked) {

            break;

        }

    }

    if (i == habilidades_elem.length) {

        
        aviso(3, "É obrigatório ter conhecimento em alguma dessas áreas", "Requerido");
        return true;

    }
    
    return false;

}

function validacao_nome() {

    // Entrada de variáveis

    let nome_elem = document.querySelector("#nome");
    

    if (/[1-9]/.test(nome_elem.value)) { // Uma expressão regular que verifica se o nome contém algum dos dígitos dentro dos parenteses 

        aviso(0, "Não é permitido nome com números.", "Nome inválido!")
        return true;
        
    }

    return false;

}

function validacao_data_nascimento() {
    
    // Entrada de variáveis

    let data_nascimento_elem = document.querySelector("#data_nascimento");
    
    let data_nascimento = new Date(data_nascimento_elem.value);

    let dia_nascimento = Number(data_nascimento_elem.value.split("-")[2]);

    let hoje = new Date();

    
    if (hoje.getFullYear() - data_nascimento.getFullYear() < 0) {
        
        aviso(1, "Essa idade é impossível, ou você é um viajante do tempo.", "Tente novamente!")
        return true;
        
    }

    else if (hoje.getFullYear() - data_nascimento.getFullYear() > 130) {

        aviso(1, "Em junho de 2025 a expectativa de vida não passa de 130", "Seja verdadeiro.")
        return true;

    }

    else if (hoje.getFullYear() - data_nascimento.getFullYear() < 18 || (hoje.getFullYear() - data_nascimento.getFullYear() == 18 && (hoje.getMonth() - data_nascimento.getMonth() < 0  || (hoje.getMonth() - data_nascimento.getMonth() == 0 && hoje.getDate() - dia_nascimento < 0)))) {

        aviso(1, "Precisas ter 18 anos ou mais para se cadastar", "Vai mentir?");
        return true;

    }

    return false;

}

function validacao_email() {

    // Entrada de variáveis

    let email_elem = document.querySelector("#email");

    
    if (! (/^[^\s@]+@+[^\s@]+\.+[^\s@]+$/.test(email_elem.value))) {

        aviso(2, "Padrão de email incompatível.", "Coloque outro email");
        return true;

    }

    return false;

}

function processar_formulario() {

    // Esconde se tiver algum aviso mostrado anteriormente

    esconde_avisos();


    // As validações

    if (avisa_marcacao_habilidade() || validacao_nome() || validacao_data_nascimento() || validacao_email()) { // true = valor inválido, false = valor válido

        return false;

    }


    // Mostra se foi enviado o formulário

    estado("sucesso");


    // Reinicia os campos

    zera_tudo();

    return false;

}

function estrutura_avisos() {

    for (let i = 0; i < document.querySelectorAll(".seta").length; i++) {

        let seta_tamanho_lado = document.querySelectorAll(".seta .estrutura_seta")[i].offsetHeight;

        let raiz = Math.sqrt((seta_tamanho_lado * seta_tamanho_lado) + (seta_tamanho_lado * seta_tamanho_lado));

        let metade_raiz = raiz / 2

        document.querySelectorAll(".seta")[i].style.height = `${metade_raiz}px`;

        document.querySelectorAll(".seta")[i].style.width = `${raiz}px`

            document.querySelectorAll(".seta .estrutura_seta")[i].style.width = `${seta_tamanho_lado}px`;

            document.querySelectorAll(".seta .estrutura_seta")[i].style.bottom = `${3 * -metade_raiz / 4}px`;


            document.querySelectorAll(".seta")[i].style.display = "none";

    }

}



// Adicionais para aparecer desde o início da página

estrutura_avisos();
