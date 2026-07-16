// Valida a idade informada antes do envio do formulário
function validarIdade() {

    // Obtém o valor digitado no campo idade
    let idade = document.getElementById("idade").value;

    // Impede o cadastro de menores de idade
    if(idade < 18){
        alert("Cadastro permitido apenas para maiores de 18 anos!");
        return false;
    }

    // Permite o envio do formulário
    return true;
}