const botao = document.querySelector("#botao-nome")

botao.addEventListener("click", () => {

    const titles = ["Sr.", "Mister", "Dom", "Lord", "Lady", "Capitão", "Dama"]
    const names = ["Arthur", "Gwendolyn", "Merlin", "Lancelot", "Morgana", "Ragnar", "Éowyn"]
    const classes = ["Mago", "Paladino", "Arqueiro", "Ladino", "Bárbaro", "Feiticeiro", "Caveleiro"]
    const locations = ["Valfenda", "Gondor", "Asgard", "Camelot", "Nárnia", "Babilônia", "Atlantis"]
    const paragraphName = document.querySelector("#nome") 

    let name = titles[Math.floor(Math.random() * (titles.length - 1))] + " " + names[Math.floor(Math.random() * (names.length - 1))] + ", o " + classes[Math.floor(Math.random() * (classes.length - 1))] + " de " + locations[Math.floor(Math.random() * (locations.length - 1))]

    paragraphName.innerText = name
    
})