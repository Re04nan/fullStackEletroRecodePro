//Clone
function copiar(pegou) {
    let btnConf = document.getElementsByClassName("btnComprar");
    let cont = 0, i = 0;

    while (cont <= btnConf.length) {
        if (btnConf[cont] == pegou) {
            let img = document.getElementsByClassName("imgProduto");
            while (i <= img.length) {
                if (img[i] == img[cont]) {
                    //Clonando o Obejeto
                    let containerOrigin = document.getElementsByClassName("secProdutos")[i];
                    let cln = containerOrigin.cloneNode(true);
                    console.log(cln);
                    //document.body.appendChild(cln);

                    // Check browser support    
                    if (typeof (Storage) !== "undefined") {
                        let list = document.getElementById("painelClone");
                        // // Cria um json a partir do objeto "list" 
                        // let jsonList = JSON.stringify(list);

                        // // "Seta" este json no localStorage
                        // window.localStorage.setItem('cln', jsonList);

                        // // Recupera o json do localStorage
                        // let jsonCln = window.localStorage.getItem('cln');

                        // // Converte este json para objeto
                        // let list = JSON.parse(jsonCln);
                        // // Armazenando no Store
                        // localStorage.setItem("guardar", cln); //key, value
                        
                        // Passando o valor
                        list = localStorage.guardar;
                        console.log(list);
                        if (localStorage.guardar) {
                            document.getElementById("painelClone").appendChild(list);
                        } else {
                            console.log("Ocorreu algum erro!");
                        }

                    } else {
                        alert("Sem suporte ao Web Storage do seu navegador!");
                    }
                }
                i++;
            }
        }
        cont++;
    }
}

function exibirZoom(imagem) {
    let tamanho = document.getElementsByClassName("imgProduto");
    // Laço de repetição para varrer o Array de Objetos class imgProduto
    for (let i = 0; i <= tamanho.length; i++) {
        // validando a condição do id da imagem
        if (tamanho[i].id == imagem.id) {

            let box = document.createElement("div");
            let fundo = document.createElement("div");
            let button = document.createElement("button");
            let img = document.createElement("img");
            // Style dos elementos
            img.id = "teste";
            img.src = imagem.src;
            img.style = "width: 240px; max-height: 300px; padding-top: 60px;";
            box.style = "z-index: 1; background-color: white; position: fixed; top: 20%; right: 40%; color: black; font-size:20px; vertical-align: text-top; text-align: center; width: 20%; height: 400px; margin: 20px;";
            fundo.style = "z-index: 1; background-color: white; border: 2px solid black; position: fixed; top: 15%; width: 60%; height: 500px;"
            button.style = "cursor: pointer; width: 30px; height: 30px; text-align: center; background-color: red; color: white; font-size: 20px; font-weight: bold; border: 0px; margin-left: 780px;";
            // Botão para fechar
            button.innerHTML = "X";
            button.addEventListener("click", function () { box.remove(); fundo.remove(); });
            fundo.appendChild(button);
            // imagem
            box.appendChild(img);

            // Div zoom
            document.querySelector("#container").appendChild(fundo);
            document.querySelector("#container").appendChild(box);
        } else {
            tamanho[i].style = "width: 120px";
        }
    }
}
function filtroCategoria(categoria) {
    let elementos = document.getElementsByClassName("secProdutos");

    for (let i = 0; i <= elementos.length; i++) {
        //console.log(elementos[i].id)
        if (categoria == elementos[i].id) {
            elementos[i].style = "display:inline-block";
        } else {
            elementos[i].style = "display:none";
        }
    }
}
filtrarTodos = () => {
    let elementos = document.getElementsByClassName("secProdutos");

    for (let i = 0; i <= elementos.length; i++) {
        elementos[i].style = "display:inline-block";
    }
}
// efeito mouse
efeitoTela = (selecionado) => {
    let lista = document.getElementsByClassName("lista");
    let i = 0;

    while (i <= lista.length) {
        if (lista[i].id == selecionado.id) {
            lista[i].style = "background-color: black; padding: 8px; border-radius: 20px";
        } else {
            lista[i].style = "background-color: none;";
        }
        i++;
    }
}
// limpar
limpar = () => {
    let lista = document.getElementsByClassName("lista");
    let i = 0;

    while (i <= lista.length) {
        lista[i].style = "background-color: none";
        i++;
    }
}
