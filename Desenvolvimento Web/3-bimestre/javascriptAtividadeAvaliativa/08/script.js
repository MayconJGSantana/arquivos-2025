let entradaComida = document.querySelector("#entradaComida")

entradaComida.addEventListener("input", () => {

    let resultado = document.querySelector("#resultado")

    let comida = entradaComida.value

    if (comida.length > 3) {

        if (comida == "chocolate") {

            resultado.innerText = "Eu amo sorvete de chocolate!"

        }
        else if (comida == "flocos") {

            resultado.innerText = "Ahh, mas chocolate é o meu favorito..."

        }
        else {

            resultado.innerText = "Ahh, eu esperava um sabor de sorvete..."

        }

    }
    else {

        resultado.textContent = "Resultado..."
        
    }
    
})