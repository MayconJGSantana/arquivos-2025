let formulario = document.querySelector("#formulario")
let mensagemErro = document.querySelector(".mensagem-erro")

formulario.addEventListener("submit", (propriedades) => {

    let nome = document.querySelector("#nome").value
    let email = document.querySelector("#email").value
    let senha = document.querySelector("#senha").value
    let confirmacaoSenha = document.querySelector("#confirmacao-senha").value

    const formatoEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.[a-zA-Z]{2,}$/
    const formatoSenha = /^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/
    mensagemErro.textContent = ""

    // Interrompe o envio dos formulários, visto que a variáveis consta com as propriedades do formulário
    propriedades.preventDefault()

    if (nome.length < 3) {

        mensagemErro.textContent = "O nome precisa ter mais de 3 caracteres"
        return

    }

    else if (! formatoEmail.test(email)) {

        mensagemErro.textContent = "Informe um email válido"
        return

    }

    else if (! formatoSenha.test(senha)) {

        mensagemErro.textContent = "Senha muito fraca! Adicione uma letra maiúscula, um caracter especial e ter no mínimo 8 caracteres"
        return

    }

    else if (confirmacaoSenha != senha) {

        mensagemErro.textContent = "Senhas diferentes"
        return

    }

    formulario.reset()

})