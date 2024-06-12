
valores = [];
valores2 = [];
function Calculo()
{
    var hora = document.getElementById('H/A').value
    var aula = document.getElementById('H/ASem').value
    var tg = parseInt(hora) * parseInt(aula)
    var resultado = document.getElementById('resultado')
    resultado.innerText = tg
    console.log('Confirma')
    console.log(tg)
}
function crece(){
    var num = document.getElementById('nuns').value;
    var num2 = document.getElementById('nun').value;
    valores.push(num, num2)
    valores = valores.sort();
    console.log(valores)
    let text = document.getElementById("tex");
    text.innerText = valores
}
function tresnum(){
    var nun = document.getElementById("val1").value;
    var nun2 = document.getElementById("val2").value;
    var nun3 = document.getElementById("val3").value;
    valores2.push(nun, nun2, nun3);
    valores2 = valores.sort();
    let text2 = document.getElementById("text2");
    text2.innerText = valores2  
}
function fruta()
{
    var frt = ['maçã', 'banana', 'laranja', 'uva', 'manga']
    var numarray = frt.length
    var textofrt = document.getElementById('ExFrt')
    console.log(frt[1])
    console.log(frt[numarray - 1])
    frt.push("abacaxi"); 
    frt.unshift("morango"); 
    frt.pop()
    frt.shift()
    console.log(frt)
    tam = frt.length
    var frutasm = ["Maçã, Manga"]
    for(i = 0; i <= numarray - 1; i++)
    {
        if(frt[i] == 'laranja')
        {
            console.log(frt[i])
            console.log(i)
        }
    }

}
