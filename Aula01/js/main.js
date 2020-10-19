function clicou(){
    document.getElementById("agradecimento").innerHTML = "obrigada por clicar";
   //alert("obrigada por clicar");
}
function redirecionar(){
    window.open("https://123milhas.com/");
}
function  trocar(){
    document.getElementById("mousemove").innerHTML = "Obrigada por passar o mouse";

    //alert("trocar texto");
}
function funcaochange(elemento){
    console.log(elemento.value);
}

/*function soma(n1, n2){
    return n1 + n2;
}
function validaIdade(idade){
    var validar;
    if (idade >= 18){
        validar = true
    }else{
        validar = false
    }
    return validar;
}
var idade = prompt("Qual sua idade?");
console.log(validaIdade(idade));
//alert(soma(5,2));
//var d = new Date();
//alert(d.getMonth()+1);
/*var count;
for(count=0; count<=5; count++){
    alert(count);
};
*/
/*var count = 0;
while(count <= 5){
    console.log(count);
    alert(count);
    count ++;
};
*/

//var idade = prompt("qual a sua idade?");// o comando prompt coleta informação do usuario
//if (idade => 18){
  //  alert('maior de idade');
//} else{
    //alert("menor de idade");
//};
//var fruta = {nome:"maça", cor:"verde"}
//console.log(fruta.nome);
//alert(fruta.cor);

//var lista = ["maça","pera","laranja"];
//console.log(lista[1]);
//alert(lista[1]);
//var nome = "Lucilene Macedo";
//var idade = "32"
//alert(nome + " tem "  + idade + "anos");
