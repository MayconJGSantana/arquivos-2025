<?php

function cabecalho ($titulo) : void {

    limpaTerminal();

    $titulo = " " . $titulo . " ";

    print(str_pad($titulo, 50, "_-", STR_PAD_BOTH) . "\n" . "\n");

}

function limpaTerminal () : void {

    print(str_repeat("\n", 50));

}

function criarCartas (array $cartas) : array {
    
    ksort($cartas); /* Antes de executar a função criarCartas, eu procurei já deixar o array de cartas em ordem crescente, assim não teria problema com a lógica de adicionar um objeto com o número fora de ordem. Vale ressaltar que todo o esforço para organizar a lista em ordem é para não precisar fazer esse trabalho manualmente, assim eu só preciso colocar uma nova carta na lista */

    $objetosCartas = array();

    foreach ($cartas as $chave => $carta) {

        $objetoCarta = new Carta();

        $objetoCarta -> setNome($carta["nome"])
                     -> setNumero(floatval($chave)); /* A função floatval irá transofrmar a string em parènteses em um número flutuante, ele irá retornar um número com as casas decimais da string. Em caso de falha, ele retornará 0. Tive de usar essa função pois precisava transformar a chave de um array associativo em números, pois eles correspondem ao índice. O motivo pelo qual não usei um array indexado é que a chave não pode ser números com vírgulo, então, por exemplo, se eu quisesse colocar uma carta chamada pi e 
                     seu número fosse "3.14", para deixar na ordem crescente com as outras cartas, precisaria de um sort, no entanto não há como colocar um índice númerico com vírgula */

        if (strlen(trim($carta["dica"])) > 0) {

            $objetoCarta -> setDica($carta["dica"]);
            
        }

        array_push($objetosCartas, $objetoCarta); 
                    
    }

    return $objetosCartas;

}

function baralho () : array {

    $cartas = [

                "9.8" => [
                    "nome" => "Gravidade",
                    "dica" => "Valor da aceleração local em um campo conservativo gerado por uma massa planetária."
                ],

                "300000" => [
                    "nome" => "Velocidade da Luz (simplificada)",
                    "dica" => "Limite superior de propagação de informação em espaço-tempo plano segundo a relatividade restrita."
                ],

                "100" => [
                    "nome" => "Ponto de Ebulição",
                    "dica" => "Temperatura na qual a pressão de vapor de um líquido iguala a pressão externa padrão."
                ],

                "273" => [
                    "nome" => "Zero Absoluto (em °C)",
                    "dica" => "Referência térmica onde a entropia de um sistema ideal tende ao mínimo conforme a terceira lei da termodinâmica."
                ],

                "760" => [
                    "nome" => "Pressão Atmosférica",
                    "dica" => "Equivalente à força exercida por uma coluna de mercúrio de 760 mm sob gravidade padrão."
                ],

                "3.14" => [
                    "nome" => "Pi",
                    "dica" => "Constante irracional que relaciona a razão entre perímetro e diâmetro em geometria euclidiana."
                ],

                "4000" => [
                    "nome" => "Temperatura Solar (simplificada)",
                    "dica" => "Temperatura efetiva de corpo negro que emite o mesmo fluxo radiativo que a fotosfera solar."
                ],

                "-1" => [
                    "nome" => "Índice de Refração Negativo",
                    "dica" => "Valor observado em metamateriais cuja permissividade e permeabilidade são simultaneamente negativas."
                ],

                "3999" => [
                    "nome" => "Frequência Sonora",
                    "dica" => "Oscilação periódica de pressão em meio elástico com comprimento de onda audível ao ouvido humano."
                ],

                "60" => [
                    "nome" => "Frequência Elétrica",
                    "dica" => "Taxa de reversão de polaridade em corrente alternada padronizada por redes de distribuição."
                ],

                "1" => [
                    "nome" => "Kilograma",
                    "dica" => "Unidade de massa definida a partir da constante de Planck via balança de Watt."
                ],

                "5000" => [
                    "nome" => "Temperatura Estelar",
                    "dica" => "Temperatura superficial de uma estrela de tipo espectral G, estimada por espectroscopia."
                ],

                "340" => [
                    "nome" => "Velocidade do Som",
                    "dica" => "Velocidade de propagação de perturbações longitudinais em meio gasoso isotérmico."
                ],

                "1800" => [
                    "nome" => "Calor Específico da Água",
                    "dica" => "Capacidade térmica por unidade de massa em regime de pressão constante."
                ],

                "220" => [
                    "nome" => "Tensão Elétrica",
                    "dica" => "Diferença de potencial entre dois pontos de um circuito em regime alternado residencial."
                ]
            
];

    return criarCartas($cartas);

}

function mostraCartas (array $cartas) : void {

    foreach ($cartas as $carta) {

        $maiorChave = strlen($carta -> getNumero());

    }

    foreach ($cartas as $carta) {

        print("[ " . str_pad($carta -> getNumero(), $maiorChave, ' ', STR_PAD_BOTH) . " ] - " . $carta . "\n"); /* A função str_pad serve para colocar quantidade de caracteres, ela junta uma string com uma quantidade de caracteres determinada na função. O último parâmetro que coloquei serve para "centralizar" a string, o motivo das aspas é que em caso de espaçamento par e cadeia de caracteres impar, haverá uma diferença entre os espaços a esquerda e a direita, e vice-versa */

    }


}

function dentreObjetos ($escolha, array $objetos) : bool {

    foreach ($objetos as $objeto) {

        if ($escolha == $objeto -> getNumero()) {
            
            return true;

        }

    }

    return false;

}

function escolhaUsuario (array $cartas) {

    $escolha = "";

    while (true) {

        $escolha = readline("Qual o seu palpite? ");
        
        if (dentreObjetos($escolha, $cartas) or $escolha == "") {

            break;

        }

        else {

            print("\t\033[31mValor inválido, tente novamente!\033[m\n");
        
            usleep(500000);

        }

    }

    usleep(500000);

    return $escolha;

}

function calculaPontuacao (int $tentativas) : int {

    if ($tentativas > 10) {

        $pontuacao = 10;

    }
    else {

        $pontuacao = ((10 - ($tentativas - 1)) * 10) + 10;

    }

    return $pontuacao;

}

function adivinhação ($cartas, &$pontuacao) {


    $escolha = $cartas[array_rand($cartas)];

    $tentativas = array();

    while (true) {

        cabecalho("Adivinharás?");

        mostraCartas($cartas);

        print("\n");

        if (count($tentativas) + 1 > 4) {

            print("\tDica: " . $escolha -> getDica() . "\n\n");
        }

        $escolhaUsuario = trim(escolhaUsuario($cartas)); /* Utilizei o trim para tirar espaços antes e depois da resposta */
        
        print("\n");

        if ($escolhaUsuario == "") {

            print("\tNão foi dessa vez :(\n");
            print("\tPS: você ficou com -20 de pontuação\n");
            $pontuacao = -20;
            break;

        }
            
        else if ($escolhaUsuario == $escolha -> getNumero()) {
        
            print("\tPARABÉNSSSSSSSSSSSSSSS, você acertou!\n\n");
            $pontuacao = calculaPontuacao(count($tentativas) + 1);
            break;
        
        }

        else if (in_array($escolhaUsuario, $tentativas)) {

             print("\t\033[32mJá tentou esse valor, tente outro!\033[m\n");

        }

        else {

            print("\tPeninha, não é!\n");
            array_push($tentativas, $escolhaUsuario);

        }

        sleep(1); /* Intervalo em segundos */

    }



}

function menu ($opcoes) {

    $maiorChave = strlen(max(array_keys($opcoes))); /* Temoms duas funções novas, o array_keys usado para pegar somente os valores das chaves (funciona para array associativo. Depois a função max() pega o maior valor inteiro desse array, que é indexado. Por fim vou pegar o tamanho da string. */

    foreach ($opcoes as $chave => $opcao) {

        print("[ " . str_pad($chave + 1, $maiorChave, "_-", STR_PAD_BOTH) . " ] - " . $opcao . "\n");

    }

    print("\n");

}

function escolhaMenuUsuario ($opcoes) : int {

    while (true) {

        $escolhaMenu = readline("Qual é sua escolha? ");

        if (($escolhaMenu > 0 and $escolhaMenu <= count($opcoes) + 1 and $escolhaMenu != "")) {

            break;

        }

        else {

            print("\t\033[31mValor inválido, tente novamente!\033[m\n");
        
            usleep(500000);
   
        }
    }

    usleep(500000);

    return $escolhaMenu;

}

function pontuacao ($maiorPontuacao, $ultimaPontuacao, $pontuacaoTotal) {

    print("Última pontuação:\n");
    print("\t" . $ultimaPontuacao . "\n");
    print("\033[33mMaior pontuação:\033[m\n");
    print("\t" . $maiorPontuacao . "\n");
    print("\n\nPontuaçāo total: " . $pontuacaoTotal);

}

function voltar () : void {

    $voltar = "";

    do {

        $voltar = readline("Para voltar aperte [Enter]");

    } while ($voltar != "");

}

function jogo () {

    $maiorPontuacao = "";

    $ultimaPontuacao = "";

    $pontuacaoTotal = 0;

    $opcoes = ["Jogar", "Pontuação", "Sair"];

    $cartas = baralho();
    
    while (true) {

        cabecalho("Jogo das cards");

        menu($opcoes);

        $escolhaMenuUsuario = escolhaMenuUsuario($opcoes);

        switch ($escolhaMenuUsuario) {

            case 1:

                cabecalho($opcoes[$escolhaMenuUsuario - 1]);

                adivinhação($cartas, $ultimaPontuacao);

                if (($ultimaPontuacao > $maiorPontuacao or $maiorPontuacao == "") and $ultimaPontuacao != "") {

                    $maiorPontuacao = $ultimaPontuacao;

                }

                if ($ultimaPontuacao != "") {

                    $pontuacaoTotal += $ultimaPontuacao;

                }

                voltar();

                break;

            case 2:

                cabecalho($opcoes[$escolhaMenuUsuario - 1]);

                pontuacao($maiorPontuacao, $ultimaPontuacao);

                voltar();

                break;

        }

        usleep(500000); /* Um atraso de 500 mil microssegundos, ou 0.5 segundos. */


    }
    
}

class Carta {

    // Atributos

    private float $numero; /* Tive de alterar a tipagem do número por que gostaria de aumentar os limites dos quais posso usar, além disso, não tinha nenhum proibição.*/
    private string $nome;
    private string $dica;


    // Métodos

    public function __construct (string $dica = "Não tem nenhuma :( Ainda em produção ;)") {

        $this -> dica = $dica;

    }

    public function __toString() : string {

        return $this -> nome;
        
    }


    // Gets e Sets


    

    /**
     * Get the value of numero
     */
    public function getNumero(): float
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(float $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of dica
     */
    public function getDica(): string
    {
        return $this->dica;
    }

    /**
     * Set the value of dica
     */
    public function setDica(string $dica): self
    {
        $this -> dica = $dica;

        return $this;
    }
}



// Programa;


jogo();
