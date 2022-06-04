var nasc = document.getElementById("#nascimento").value;
var ano = 2022;
var idade = parseInt(ano) - parseInt(nasc);

function calcular(){

document.getElementById("demo").innerHTML = idade;
}


    function msg(){

        var m1 = menino;
        var m2 = menina;

            if(value = "MASCULINO"){
            document.getElementById("most").innerHTML = `O sistema previu que você é um ${m1} de ${idade} anos de idade`
          
        }else{
  
            document.getElementById("most").innerHTML = `O sistema previu que você é um ${m2} de ${idade} anos de idade`


        }
    }




