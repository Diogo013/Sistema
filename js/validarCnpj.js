function validarCNPJ(valor) {
 
    if(valor == ''){ return alert("CNPJ Inválido");}
     
    if (valor.length != 14){
        return alert("CNPJ Inválido");
    }    
 
    // Elimina CNPJs invalidos conhecidos
    if (valor == "00000000000000" ||
        valor == "11111111111111" ||
        valor == "22222222222222" ||
        valor == "33333333333333" ||
        valor == "44444444444444" ||
        valor == "55555555555555" ||
        valor == "66666666666666" ||
        valor == "77777777777777" ||
        valor == "88888888888888" ||
        valor == "99999999999999"){
        return alert("CNPJ Inválido");
        }     
    // Valida DVs
    tamanho = valor.length - 2
    numeros = valor.substring(0,tamanho);
    digitos = valor.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2){
            pos = 9;
      }    
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0)){
        return alert("CNPJ Inválido");
    }     
    tamanho = tamanho + 1;
    numeros = valor.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2){
            pos = 9;
      }    
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1)){
          return alert("CNPJ Inválido");
    }      
    //Retorna um alerta para CNPJ válido
    return alert("CNPJ Válido");
    
}

function validarInputs(){
    var input = document.getElementsByTagName("input");
    if (input == ""){
        return alert("Existe Espaços em Brancos");
    }
}
