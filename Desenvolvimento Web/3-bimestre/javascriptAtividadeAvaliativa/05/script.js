function criar() {

    // let pergunta = prompt("Teste: ")

    const novoItem = document.createElement("li")
    const lista = document.querySelector("#lista")

    novoItem.innerText = "Item n° " + (lista.childElementCount + 1)

    lista.appendChild(novoItem)

}