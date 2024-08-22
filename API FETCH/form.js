window.onload = function(){

    let bt = document.querySelector("button");
    let dados = document.querySelector("#json");
    let cep = document.querySelector("#cep");
    let endereco = document.getElementById("end");
    let complemento = document.getElementById("comp");
    let bairro = document.getElementById("bai");
    let estado = document.getElementById("est");
    let numero = document.getElementById("num");

    bt.addEventListener("click", ()=>{
        //alert(cep.value);
        let servidor = `https://viacep.com.br/ws/${cep.value}/json/`;
        console.log(servidor);
        fetch(servidor).then(
            (resp) => { return resp.json();}
        ).then(
            (data) => {
            /*
                let p = document.createElement("p");
                let p1 = document.createElement("p");

                let texto = document.createTextNode("Bairro: " + data["bairro"]);
                let texto1 = document.createTextNode("Endereço: " + data["logradouro"]);

                p.appendChild(texto);
                p1.appendChild(texto1);

                dados.appendChild(p);
                dados.appendChild(p1);
            */
                //mostrar no campo
                //1. endereco.value = data.logradouro;
                //2. endereco.value = data['logradouro'];

                endereco.value = data.logradouro;
                complemento.value = data.complemento;
                bairro.value = data.bairro;
                estado.value = data.uf;                

                let div = document.createElement("div");
                /*for(let key in data){
                    //console.log(`${key} : ${data[key]}`);
                    let p = document.createElement("p");
                        let texto = document.createTextNode(`${key.toUpperCase()} : ${data[key]}`);
                        p.appendChild(texto);
                        div.appendChild(p);
                }
                */
                    dados.append(div)
            }

        ).catch(
            (er) =>{
                console.error(er);
            }
        )
            
        
      
    })
}